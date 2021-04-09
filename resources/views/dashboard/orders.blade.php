@extends('dashboard.layout')

@section('content')
    <div class="container-fluid px-lg-5 orders">
        <h3 class="home-h3 font-weight-bold my-4">All Orders</h3>
        <div class="table-responsive">
            <table class="table " width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->category}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>&#x20a6;{{$order->price}}</td>
                    <td>
                        <span class="badge badge-success">successful</span>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection