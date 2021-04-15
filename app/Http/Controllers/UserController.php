<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function index(){
        $orders = $this->getOrdersDesc(3);
        return view('dashboard.home', [
            'orders' => $orders,
        ]);
    }

    public function transactions(){
        $transactions = Auth::user()->transactions;
        return view('dashboard.paymenthistory', ['transactions' => $transactions]);
    }

    public function createOrder(Request $request){
        $res =  Auth::user()->createOrder($request);
        return $res === true? "success": $res;
    }

    public function orders(){
        $orders = $this->getOrdersDesc();
        return view('dashboard.orders', ['orders' => $orders]);
    }
    
    public function getOrdersDesc($quantity = null) {
        return Order::where('user_id', Auth::id())->orderBy('id', 'desc')->take($quantity)->get();
    }
}
