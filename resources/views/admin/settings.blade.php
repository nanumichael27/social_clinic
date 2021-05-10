@extends('admin.layout')

@section('title')
Settings <small>(All changes on this page occur live)</small>
@endsection

@section('content')
<div class="row">
@livewire('settings')
</div>
@endsection

@section('js')

@endsection