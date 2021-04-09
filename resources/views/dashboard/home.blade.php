@extends('dashboard.layout')

@section('content')
<div class="container px-lg-5">
  <h3 class="home-h3 font-weight-bold my-4">Dashboard</h3>
  <div class="row stat">
    <div class="col-xl-4 col-md-6">
      <div class="card  mb-5">
        <div class="card-header">Wallet Balance</div>
        <div class="card-body home-h2">N{{Auth()->user()->balance}}</div>
        <div class="card-footer d-flex align-items-center ">
          <a class="small mr-2 stretched-link" href="{{route('fundwallet')}}">Fund Wallet</a>
          <div class="small "><i class="fas fa-arrow-right"></i></div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-6">
      <div class="card  mb-5">
        <div class="card-header">Total Orders</div>
        <div class="card-body home-h2">{{Auth()->user()->getTotalOrders()}}</div>
        <div class="card-footer d-flex align-items-center">
          <a class="small mr-2 stretched-link" href="{{route('orders')}}">View More</a>
          <div class="small "><i class="fas fa-arrow-right"></i></div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-6">
      <div class="card mb-5">
        <div class="card-header">Total Depositss</div>
        <div class="card-body home-h2">{{ Auth()->user()->getTotalPayments() }}</div>
        <div class="card-footer d-flex align-items-center ">
          <a class="small mr-2" href="{{route('paymenthistory')}}">View More</a>
          <div class="small "><i class="fas fa-arrow-right"></i></div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xl-12 col-md-12">
      <div class="card mb-4">
        <div class="card-header table-header d-flex align-items-center justify-content-between input-group-append">
          <div class="small ">Recent Orders</div>
          
          <a href="{{route('createorder')}}" class="btn btn-primary d-flex align-items-center create-orders"><img src="https://likes.ng/images/dashboard/plus-circle.svg" alt="">
            <p class="m-0  ml-2 ">Create Order</p>
          </a>
        </div>
        @if(count($orders) < 1)
        <div class="card-body table-body">
          <div class="table-responsive">
            <p class="pl-4">No orders</p>
          </div>
        </div>
        @else
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
        @endif
      </div>
    </div>
  </div>
</div>

@endsection

@section('js')

<script>
  $('#alert_modal').modal('show')
</script>
@endsection