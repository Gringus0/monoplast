@extends('layouts.admin')
@section('content')
    <form action="{{ route('admin.actions.store') }}" method="POST" class="col-4 m-5" enctype="multipart/form-data">
        @csrf
        <div class="input-group">
            <label for="naslov">Naslov: </label>
            <input type="text" class="form-control" name="naslov" id="naslov">
        </div>
        <div class="input-group">
            <label for="visina_akcije">Visina Akcije: </label>
            <input type="text" class="form-control" name="visina_akcije" id="visina_akcije">
        </div>
        <div class="input-group">
            <label for="slika">Slika: </label>
            <input type="file" class="form-control" name="slika">
        </div>
        <div class="input-group">
            <label for="slika2">Slika2: </label>
            <input type="file" class="form-control" name="slika2">
        </div>
        <label for="datum_od">Od: </label>
        <input type="date" id="datum_od" name="datum_od">
        <label for="datum_do">Do: </label>
        <input type="date" id="datum_do" name="datum_do">
        <textarea class="form-control" name="tekst" id="tekst" cols="30" rows="10"></textarea>
        <button type="submit" class="btn btn-dark">Kreiraj akciju</button>
    </form>
    @if(session('success'))
        {{ session('success') }}
    @endif
    @if(session('error'))
        {{ session('error') }}
    @endif
@endsection
