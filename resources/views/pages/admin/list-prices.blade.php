@extends('layouts.admin')

@section('content')
<div class="col-6 p-4">
    <h2 class="d-flex justify-content-center p-4 titleAdmin">IZMENA CENA</h2>

    <form method="" action="" class="mb-4">
        @csrf
        <div class="mb-3 d-flex justify-content-between">
            <label for="vrsta" class="labelAdmin">Vrsta kese:</label>
            <select name="vrsta" id="vrsta" class="bg-light rounded inputAdmin">
                <option value="">-- Izaberite vrstu kese --</option>
                <option value="banana_bez_ojacanja" {{ request('vrsta') == 'banana_bez_ojacanja' ? 'selected' : '' }}>Banana ručka bez ojačanja</option>
                <option value="banana_ojacana_fleksibilna" {{ request('vrsta') == 'banana_ojacana_fleksibilna' ? 'selected' : '' }}>Banana Ojačana ili Fleksibilna</option>
                <option value="banana_ojacana_fleksibilna_falt" {{ request('vrsta') == 'banana_ojacana_fleksibilna_falt' ? 'selected' : '' }}>Banana Ojačana ili Fleksibilna i Falt</option>
                <option value="banana_bez_ojacanja_falt" {{ request('vrsta') == 'banana_bez_ojacanja_falt' ? 'selected' : '' }}>Banana Bez Ojačanja i Falt</option>
                <option value="blanko_bez_ojacanja" {{ request('vrsta') == 'blanko_bez_ojacanja' ? 'selected' : '' }}>Blanko Bez Ojačanja</option>
                <option value="blanko_ojacana_falt" {{ request('vrsta') == 'blanko_ojacana_falt' ? 'selected' : '' }}>Blanko Ojačana i Falt</option>
            </select>
        </div>

        <div class="mb-3 d-flex justify-content-between">
            <label for="velicina" class="labelAdmin">Veličina:</label>
            <select name="velicina" id="velicina" class="bg-light rounded inputAdmin">
                <option value="0">-- Izaberite prvo kesu --</option>
            </select>
        </div>

        <div class="d-flex justify-content-center mb-4">
            <button type="submit" class="btn btn-dark">Potvrdi</button>
        </div>
    </form>

    <form action="{{ route('admin.prices.change-price') }}" method="POST">
        @csrf
        <input type="hidden" name="vrsta" value="{{ request('vrsta') }}">
        <input type="hidden" name="velicina" value="{{ request('velicina') }}">

        @php
            $cena = $data->first() ?? null; 
        @endphp

        @for($i = 1; $i <= 5; $i++)
            <div class="mb-2 d-flex justify-content-between">
                <label for="boja{{ $i }}" class="me-2 labelAdmin">{{ $i }} boja:</label>
                <input type="text" class="inputAdmin" name="boja{{ $i }}" value="{{ $cena->{'boja'.$i} ?? '' }}">
            </div>
            @if(!isset($cena->{"boja2"}))
                @break
            @endif
        @endfor

        
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-dark">Izmeni</button>
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
