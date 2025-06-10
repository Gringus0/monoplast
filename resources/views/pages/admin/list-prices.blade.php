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

        @foreach($data as $cena)
            <div class="mb-2 d-flex justify-content-between">
                <label for="boja1" class="me-2 labelAdmin">1 boja:</label>
                <input type="text" class="inputAdmin" name="boja1" value="{{ $cena->boja1 }}">
            </div>

            <div class="mb-2 d-flex justify-content-between">
                <label for="boja2" class="me-2 labelAdmin">2 boja:</label>
                <input type="text" class="inputAdmin" name="boja2" value="{{ $cena->boja2 }}">
            </div>

            <div class="mb-2 d-flex justify-content-between">
                <label for="boja3" class="me-2 labelAdmin">3 boja:</label>
                <input type="text" class="inputAdmin" name="boja3" value="{{ $cena->boja3 }}">
            </div>

            <div class="mb-2 d-flex justify-content-between">
                <label for="boja4" class="me-2 labelAdmin">4 boja:</label>
                <input type="text" class="inputAdmin" name="boja4" value="{{ $cena->boja4 }}">
            </div>

            <div class="mb-4 d-flex justify-content-between">
                <label for="boja5" class="me-2 labelAdmin">5 boja:</label>
                <input type="text" class="inputAdmin" name="boja5" value="{{ $cena->boja5 }}">
            </div>
        @endforeach

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-dark">Izmeni</button>
        </div>
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
