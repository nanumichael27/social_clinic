<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'category',
        'profile_link',
        'link',
        'quantity',
        'price',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function isForFollowers(){
        $category = strtolower($this->category);
        return stripos($category, "follow");
    }

    public function canBePlacedBy(User $user){
        $this->getUpdatedPrice();
        return ($user->balance >= $this->price);
    }

    public function getUpdatedPrice(){
        $this->price = $this->quantity*5;
        return $this->price;
    }



}

