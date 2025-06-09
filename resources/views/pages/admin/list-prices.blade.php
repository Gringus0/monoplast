@extends('layouts.admin')

@section('content')
    <div>
        <h2>Lista Cena</h2>
        <form action="">
            @csrf
            <label class="marginRight15" for="vrsta">Vrsta kese:</label>
            <select name="vrsta" id="vrsta">
                <option value="">-- Izaberite vrstu kese --</option>
                <option value="banana_bez_ojacanja" {{ request()->query('vrsta') == 'banana_bez_ojacanja' ? 'selected' : '' }}>Banana Bez Ojačanja</option>
                <option value="banana_ojacana_fleksibilna" {{ request()->query('vrsta') == 'banana_ojacana_fleksibilna' ? 'selected' : '' }}>Banana Ojačana ili Fleksibilna</option>
                <option value="banana_ojacana_fleksibilna_falt" {{ request()->query('vrsta') == 'banana_ojacana_fleksibilna_falt' ? 'selected' : '' }}>Banana Ojačana ili Fleksibilna i Falt</option>
                <option value="banana_bez_ojacanja_falt" {{ request()->query('vrsta') == 'banana_bez_ojacanja_falt' ? 'selected' : '' }}>Banana Bez Ojačanja i Falt</option>
                <option value="blanko_bez_ojacanja" {{ request()->query('vrsta') == 'blanko_bez_ojacanja' ? 'selected' : '' }}>Blanko Bez Ojačanja</option>
                <option value="blanko_ojacana_falt" {{ request()->query('vrsta') == 'blanko_ojacana_falt' ? 'selected' : '' }}>Blanko Ojačana i Falt</option>
            </select>


            <div id="velicina"></div>

            <button type="submit">Prikaži cene</button>
        </form>


        <form action="{{ route('admin.prices.change-price') }}" method="POST">
            @csrf
            <input type="hidden" name="vrsta" value="{{ request('vrsta') }}">
            <input type="hidden" name="velicina" value="{{ request('velicina') }}">
            @foreach($data as $cena)
                <label class="marginRight15" for="boja1">Boja 1</label>
                <input type="text" name="boja1" value="{{ $cena->boja1 }}"> <br>
                @if($cena->boja2)
                    <label class="marginRight15 p-2" for="boja2">Boja 2</label>
                    <input type="text" name="boja2" value="{{ $cena->boja2 }}"> <br>
                    <label class="marginRight15" for="boja3">Boja 3</label>
                    <input type="text" name="boja3" value="{{ $cena->boja3 }}"> <br>
                    <label class="marginRight15" for="boja4">Boja 4</label>
                    <input type="text" name="boja4" value="{{ $cena->boja4 }}"> <br>
                    <label class="marginRight15" for="boja5">Boja 5</label>
                    <input type="text" name="boja5" value="{{ $cena->boja5 }}"> <br>
                @endif
            @endforeach
            <button type="submit">Izmeni cene</button>
        </form>
    </div>
    @if(session('success'))
        {{ session('success') }}
    @endif
    @if(session('error'))
        {{ session('error') }}
    @endif

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const selectedVelicina = "{{ request('velicina') }}";

        $('#vrsta').on('change', function () {
            var selectedType = $(this).val();

            $.ajax({
                url: '{{ route("get.velicine.kese") }}',
                type: 'GET',
                data: {
                    vrsta: selectedType
                },
                success: function (data) {
                    let options = `<select name="velicina">
                       <option value="">-- Izaberite veličinu --</option>`;
                    data.forEach(function (item) {
                        let selected = item.velicina === selectedVelicina ? 'selected' : '';
                        options += `<option value="${item.velicina}" ${selected}>${item.velicina}</option>`;
                    });
                    options += `</select>`;
                    $('#velicina').html(options);
                },
                error: function () {
                    alert("Greška prilikom dohvatanja veličina.");
                }
            });
        });

        $(document).ready(function () {
            const selectedType = $('#vrsta').val();
            if (selectedType) {
                $('#vrsta').trigger('change');
            }
        });
    </script>
@endsection
