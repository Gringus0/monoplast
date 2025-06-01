@extends('layouts.layout')
@section('content')
    Order Page
    <div class="row">
        <form action="{{route('auth.register')}}" method="POST" class="col-4 m-5">
            @csrf
            <h3>Register</h3>
            <div class="mb-3">
                <label class="form-label">Ime</label>
                <input type="text" class="form-control" name="name" value={{old('name')}}>
                @error('name') {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value={{old('email')}}>
                @error('email') {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Telefon 1</label>
                <input type="text" class="form-control" name="phone" value={{old('phone')}}>
                @error('phone') {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Telefon 2</label>
                <input type="text" class="form-control" name="phone2" value={{old('phone2')}}>
                @error('phone2') {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Firma</label>
                <input type="text" class="form-control" name="company" value={{old('company')}}>
                @error('company') {{$message}}
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <form action="{{route('auth.login')}}" method="POST" class="col-4 m-5">
            @csrf
            <h3>Login</h3>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="login-email" value={{old('login-email')}}>
                @if(session('error')) {{session('error')}} @endif
                @if(session('success')) {{session('success')}} @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
