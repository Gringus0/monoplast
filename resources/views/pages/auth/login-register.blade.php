@extends('layouts.layout')
@section('content')

    <main>
        <div class="row wrapper">
            <div class="col-12 col-lg-6 mb-4 mt-4">
                <form action="{{route('auth.register')}}" method="POST" class="loginRegister">
                    @csrf
                    <h3 class="Title">Register</h3>
                    <p class="mb-4 mt-4 underContactLeftColMain"> Ukoliko prvi put naručujete kese registrujte se ovde</p>
                    <div class="mb-3">
                        <label class="form-label fs-6">Ime*</label>
                        <input type="text" class="form-control" name="name" placeholder="Vase ime" value={{old('name')}}>
                        @error('name') 
                            <div class="alert alert-danger mt-2">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label fs-6">Email*</label>
                        <input type="email" class="form-control" name="email" placeholder="Vas e-mail" value={{old('email')}}>
                        @error('email') 
                            <div class="alert alert-danger mt-2">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label fs-6">Telefon 1*</label>
                        <input type="text" class="form-control" name="phone" placeholder="Kontakt telefon" value={{old('phone')}}>
                        @error('phone')
                        <div class="alert alert-danger mt-2">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label fs-6">Telefon 2</label>
                        <input type="text" class="form-control" name="phone2" placeholder="Kontakt telefon" value={{old('phone2')}}>
                        @error('phone2')
                        <div class="alert alert-danger mt-2">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label fs-6">Firma*</label>
                        <input type="text" class="form-control" name="company" placeholder="Naziv firme" value={{old('company')}}>
                        @error('company') 
                        <div class="alert alert-danger mt-2">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-send w-100 hoverButtonLoginReg">Registruj se</button>
                </form>
            </div>
        <div class="col-12 col-lg-6 mb-4 mt-4">
            <form action="{{route('auth.login')}}" method="POST" class="loginRegister">
                @csrf
                <h3 class="Title mb-4 Title">Login</h3>
                <p class="mb-4 mt-4 underContactLeftColMain"> Ukoliko već imate nalog samo ukucajte vaš mail</p>
                <div class="mb-3">
                    <label class="form-label fs-6">Email</label>
                    <input type="email" class="form-control" name="login-email" placeholder="Vas e-mail" value={{old('login-email')}}>
                    @if(session('error'))
                        <div class="alert alert-danger mt-2">
                             {{session('error')}}
                        </div>
                    @endif
                    @if(session('success')) 
                        <div class="alert alert-success mt-2">
                            {{session('success')}}
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary btn-send w-100 hoverButtonLoginReg">Uloguj se</button>
            </form>
        </div>
    </div>
    </main>
@endsection
