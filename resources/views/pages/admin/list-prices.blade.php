@extends('layouts.admin')

@section('content')
    <h2>Lista Cena</h2>
    <form action="">
        @csrf
        <select name="vrsta" id="vrsta">
            <option value="">-- Izaberite vrstu kese --</option>
            <option value="banana_bez_ojacanja">Banana Bez Ojačanja</option>
            <option value="banana_ojacana_fleksibilna">Banana Ojačana ili Fleksibilna</option>
            <option value="banana_ojacana_fleksibilna_falt">Banana Ojačana ili Fleksibilna i Falt</option>
            <option value="banana_bez_ojacanja_falt">Banana Bez Ojačanja i Falt</option>
            <option value="blanko_bez_ojacanja">Blanko Bez Ojačanja</option>
            <option value="blanko_ojacana_falt">Blanko Ojačana i Falt</option>
        </select>

        <select name="velicina" id="velicina">
            <option value="">-- Izaberite veličinu --</option>
        </select>
        <button type="submit">Prikaži cene</button>
    </form>
{{--@dd($data)--}}
    <form action="{{ route('admin.prices.change-price') }}" method="POST">
        @csrf
        @foreach($data as $cena)
            <label>Boja 1</label>
            <input type="text" value="{{ $cena->boja1 }}"> <br>
            @if($cena->boja2)
                <label>Boja 2</label>
                <input type="text" value="{{ $cena->boja2 }}"> <br>
                <label>Boja 3</label>
                <input type="text" value="{{ $cena->boja3 }}"> <br>
                <label>Boja 4</label>
                <input type="text" value="{{ $cena->boja4 }}"> <br>
                <label>Boja 5</label>
                <input type="text" value="{{ $cena->boja5 }}"> <br>
            @endif
        @endforeach
        <button type="submit">Izmeni cene</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        console.log(window.location.origin)
        $('#vrsta').on('change', function () {
            var selectedType = $(this).val();

            $.ajax({
                url: '{{ route("get.velicine.kese") }}',
                type: 'GET',
                data: {
                    vrsta: selectedType
                },
                success: function (data) {
                    let options = '<option value="">-- Izaberite veličinu --</option>';
                    data.forEach(function (item) {
                        options += `<option value="${item.velicina}">${item.velicina}</option>`;
                    });
                    $('#velicina').html(options);
                },
                error: function () {
                    alert("Greška prilikom dohvatanja veličina.");
                }
            });
        });
    </script>
@endsection
