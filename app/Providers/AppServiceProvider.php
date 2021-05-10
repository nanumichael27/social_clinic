<?php

namespace App\Providers;

use App\Models\Order;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $totalNumberOfOrders = Order::count();
        $totalEarnedOnThePlatform = Order::totalEarnedOnThePlatform();
        $totalNumberOfUsers = User::count();
        $totalNumberOfTransactions = Transaction::count();
        View::share('totalNumberOfOrders', $totalNumberOfOrders);
        View::share('totalEarnedOnThePlatform', $totalEarnedOnThePlatform);
        View::share('totalNumberOfUsers', $totalNumberOfUsers);
        View::share('totalNumberOfTransactions', $totalNumberOfTransactions);
    }
}
