@extends('admin.layout')

@section('title', 'Order')

@section('content')
<div class="row">
    <div class="col-12">
        @livewire('admin.order', ['order' => $order])
    </div>
</div>
@endsection

@section('js')

@endsection