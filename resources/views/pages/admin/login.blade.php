@extends('layouts.admin')
@section('content')
Login

<form class="col-4 m-5" action="{{route('admin.login')}}" method="post">
    @csrf
    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" class="form-control" name="username">
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<form action="{{route('admin.createAdmin')}}" method="post">
    @csrf
    <button type="submit">Create Admin</button>
</form>
@endsection
