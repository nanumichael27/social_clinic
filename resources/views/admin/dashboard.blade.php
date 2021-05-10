@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-12">
    <!-- small box -->
    <div class="small-box bg-info" >
      <div class="inner">
        <h3>{{$totalNumberOfTransactions}}</h3>

        <p>Total transactions</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
      <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-md-6 col-sm-12">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3>{{$totalNumberOfOrders}}</h3>

        <p>Total Orders</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="{{route('admin.orders')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-md-6 col-sm-12">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>₦{{$totalEarnedOnThePlatform}}</h3>

        <p>Total amount ordered</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="{{route('admin.orders')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>{{$totalNumberOfUsers}}</h3>

        <p>Total Users</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
      <a href="{{route('admin.users')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  @can('isAdmin')

  @endcan
  <!-- ./col -->
  <!-- <div class="col-lg-3 col-6 col-sm-12">
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>65</h3>

        <p>Completed Jobs</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div> -->
  <!-- ./col -->
</div>


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