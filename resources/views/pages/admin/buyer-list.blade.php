@extends('layouts.admin')
@section('content')
Spisak Kupaca
    @foreach($users as $user)
        {{ $user->ime }} <br>
    @endforeach
    {{ $users->links() }}
@endsection
