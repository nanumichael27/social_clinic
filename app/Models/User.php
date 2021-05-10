<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'balance',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'balance' => 'float'
    ];

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function fundAccount($amount){
        $this->balance += intval($amount);
        $this->save();
    }

    public function createTransaction($amount){
        $tx_ref = Transaction::generateTransactionRefrence();
        $transaction = new Transaction([
            "amount" => $amount,
            "transaction_type" => 'fund account',
            "payment_type" => 'flutterwave',
            "tx_ref" => $tx_ref,
        ]);

        $res = $this->transactions()->save($transaction);
        if($res) return $tx_ref;
    }

    public function createOrder($request){
        $values = [
            'username' => $request->social_username,
            'category' => $request->order_category,
            'profile_link' => $request->social_profile_link,
            'link' => $request->link,
            'quantity' => intval($request->quantity),
        ];
        $order = new Order($values);
        
        if($order->canBePlacedBy($this)){
            $amount = $order->getUpdatedPrice();
            $this->chargeAccount($amount);
            $this->orders()->save($order);
            return true;
        }
        return "Insufficient funds, please fund your wallet";

    }

    public function chargeAccount($amount){
        $this->balance = $this->balance - $amount;
        $this->save();
    }

    public function getTotalOrders(){
        return count($this->orders);
    }

    public function getTotalPayments(){
        return count($this->transactions);
    }

}
