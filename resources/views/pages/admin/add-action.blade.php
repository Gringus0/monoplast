@extends('layouts.admin')
@section('content')

<div class="p-4 col-12">
    <h2 class="d-flex justify-content-center p-4 titleAdmin">AKCIJE</h2>

    <form action="{{ route('admin.actions.store') }}" method="POST" class="col-4 m-5" enctype="multipart/form-data">
        @csrf
        <div class="d-flex">
            <label for="naslov" class="labelAdmin">Naslov: </label>
            <input type="text" class="bg-light rounded inputAdmin" name="naslov" id="naslov" placeholder="Dodajte naslov akcije">
        </div>
        <div class="d-flex mt-4">
            <label for="visina_akcije" class="labelAdmin">Visina Akcije: </label>
            <input type="text" class="bg-light rounded inputAdmin" name="visina_akcije" id="visina_akcije" placeholder="Dodajte visinu akcije">
        </div>
        <div class="mt-4">
            <label for="slika" class="mb-3 labelAdmin">Slika:</label>
            <input type="file" name="slika">
        </div>
        <div class="mt-4 mb-4">
            <label for="slika2" class="mb-3 labelAdmin">Slika2:</label>
            <input type="file" name="slika2">
        </div>
        <label for="datum_od">Od: </label>
        <input type="date" id="datum_od" name="datum_od">
        <label for="datum_do">Do: </label>
        <input type="date" id="datum_do" name="datum_do">
        <textarea class="form-control mt-4 focusAdmin" name="tekst" id="tekst" cols="30" rows="10"></textarea>
        <button type="submit" class="btn btn-dark mt-4">Kreiraj akciju</button>
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
