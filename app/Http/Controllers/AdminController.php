<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:isAdmin');
    }

    //
    public function index(){
        return view('admin.dashboard');
    }

    public function order($id){
        $order = Order::findOrFail($id);
        return view('admin.order', ['order' => $order]);
    }

    public function orders(){
        $orders = Order::all();
        return view('admin.orders', ['orders' => $orders]);
    }

    public function users(){
        $users = User::all();
        return view('admin.users', ['users' => $users]);
    }

    public function user($id){
        $user = User::findOrFail($id);
        return view('admin.user', ['user' => $user]);
    }

    public function settings(){
        return view('admin.settings');
    }
}
