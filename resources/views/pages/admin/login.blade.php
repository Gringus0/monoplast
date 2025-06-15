@extends('layouts.admin')
@section('content')

    <div class="formImageAdmin vh-100">
        <div class="topImageAdmin w-100">
            <h1 class="daDuck d-flex justify-content-center text-center">Admin Panel <br/>Monoplast</h1>
        </div>
        <div class="wrapper d-flex justify-content-center">
            <form class="login-form" action="{{ route('admin.login') }}" method="post">
                @csrf
                <div class="form-row">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" autocomplete="username" required>
                </div>
                <div class="form-row">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" autocomplete="current-password" required>
                </div>
                <div class="form-row button-row">
                    <button type="submit">Sign in</button>
                </div>
            </form>
        </div>
        <form class="login-form d-flex justify-content-center" action="{{ route('admin.createAdmin') }}" method="post">
            @csrf
            <div class="form-row button-row">
                <button type="submit">Create Admin</button>
            </div>
        </form>
    </div>



@endsection
