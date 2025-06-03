@extends('layouts.layout')
@section('content')
Order page
<form action="{{route('auth.logout')}}" method="post">
    @csrf
    <button type="submit">Logout</button>
</form>
@endsection
