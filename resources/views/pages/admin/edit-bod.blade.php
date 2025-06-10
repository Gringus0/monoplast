@extends('layouts.admin')
@section('content')
    <div class="col-6 p-4">
        <h2 class="d-flex justify-content-center p-4 titleAdmin">VREDNOST BODA</h2>
        <form action="{{ route('admin.edit-bod.update') }}" method="POST">
            @csrf
            <div class="mb-3 d-flex justify-content-between">
                <label for="bod" class="labelAdmin">Bod:</label>
                <input type="number" class="bg-light rounded inputAdmin" name="bod" id="bod" value="{{$bod->vrednost}}">
            </div>

            <p>Između decimala obavezno staviti *.* (tačku)</p>
            <br/>
            <div>
                <button type="submit" class="btn btn-dark">Potvrdi</button>
            </div>
        </form>

            @if(session('success'))
                <div class="alert alert-success m-3 text-center">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger m-3 text-center">
                    {{ session('error') }}
                </div>
            @endif

    </div>
        

@endsection
