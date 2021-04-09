@extends('dashboard.layout')

@section('content')
<div class="container-fluid px-lg-5 orders">
    <h3 class="home-h3 font-weight-bold my-4">Payment History</h3>
    <div class="table-responsive">
        <table class="table " width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                @switch($transaction->status)
                @case('successful')
                <tr>
                    <td>{{$transaction->tx_ref}}</td>
                    <td>{{$transaction->transaction_type}}</td>
                    <td> &#x20a6;{{$transaction->amount}}</td>
                    <td>
                        <span class="badge badge-success">{{$transaction->status}}</span>
                    </td>
                </tr>
                @break

                @case('pending')
                <tr>
                    <td>{{$transaction->tx_ref}}</td>
                    <td>{{$transaction->transaction_type}}</td>
                    <td> &#x20a6;{{$transaction->amount}}</td>
                    <td>
                        <span class="badge badge-info">{{$transaction->status}}</span>
                    </td>
                </tr>
                @break

                @default
                <tr>
                    <td>{{$transaction->tx_ref}}</td>
                    <td>{{$transaction->transaction_type}}</td>
                    <td> &#x20a6;{{$transaction->amount}}</td>
                    <td>
                        <span class="badge badge-danger">{{$transaction->status}}</span>
                    </td>
                </tr>
                @endswitch
                @endforeach
                <!-- <tr>
                    <td>nvuluncepm</td>
                    <td>Paystack</td>
                    <td> &#x20a6;4000</td>
                    <td>
                        <span class="badge badge-info">Pending</span>
                    </td>
                </tr>
                <tr>
                    <td>1614321707</td>
                    <td>Bitcoin</td>
                    <td> $400</td>
                    <td>
                        <span class="badge badge-danger">Rejected</span>
                    </td>
                </tr> -->
            </tbody>
        </table>
    </div>
</div>
@endsection