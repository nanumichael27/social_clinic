@extends('admin.layout')
@section('title', 'Orders')
@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Orders Placed</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="orders" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Category</th>
                            <th>Quantity</th>
                            <th>Price(NGN)</th>
                            <th>Time Placed</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{$order->user->name}}</td>
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
                            <th>Username</th>
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


@endsection

@section('js')
<script>
    $(function() {
        $('#orders').DataTable({
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