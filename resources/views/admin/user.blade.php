@extends('admin.layout')

@section('title', 'Users')

@section('content')
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-5">
    <!-- Profile Image -->
    <div class="card card-primary card-outline">
      <div class="card-body box-profile">
        <!-- <div class="text-center">
          <img class="profile-user-img img-fluid img-circle" src="{{ Storage::exists('profilepicture/'.$user->id.'.png') ? asset('profilepicture/'.$user->id.'.png?'.rand())  : asset('dist/img/user.svg') }}" alt="User profile picture">
        </div> -->

        <h3 class="profile-username text-center">{{$user->name}}</h3>

        <ul class="list-group list-group-unbordered mb-3">
          <li class="list-group-item">
            <strong><i class="fa fa-envelope-open"></i></strong>
            <b>Email</b> <a class="float-right">{{$user->email}}</a>
          </li>
          <li class="list-group-item">
            <strong><i class="fa fa-phone"></i></strong>
            <b>Phone</b> <a class="float-right">{{$user->phone}}</a>
          </li>
          <li class="list-group-item">
            <strong><i class="fa fa-wallet"></i></strong>
            <b>Balance</b> <a class="float-right">₦{{$user->balance}}</a>
          </li>

        </ul>

        <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Orders Placed</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="jobsTable" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>Category</th>
              <th>Quantity</th>
              <th>Price(NGN)</th>
              <th>Time Placed</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($user->orders as $order)
            <tr>
              <td> {{$order->category}}</td>
              <td>{{$order->quantity}}</td>
              <td>{{$order->price}}</td>
              <td>{{$order->created_at->diffForHumans()}}</td>
              <td>
                <a type="button" href="{{route('admin.order', $order->id)}}" class="btn bg-gradient-success btn-sm">View Order</a>
              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>Category</th>
              <th>Quantity</th>
              <th>Price(NGN)</th>
              <th>Time Placed</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>

<div class="col-md-6">
   @livewire('chat', ['user' => $user])
</div>
<!-- /.col -->

@endsection

@section('js')
<script>
  $(function() {
    $('#jobsTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });

  });
</script>
@endsection