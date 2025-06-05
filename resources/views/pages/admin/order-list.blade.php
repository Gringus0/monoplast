@extends('layouts.admin')
@section('content')
Lista Porudzbina
    @foreach($orders as $order)
        {{ $order->ime}} <br>
    @endforeach
    {{ $orders->links() }}
@endsection
