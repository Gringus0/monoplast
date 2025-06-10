@extends('layouts.admin')
@section('content')

<div class="p-4 col-12 text-center">
    <h2 class="d-flex justify-content-center p-4 titleAdmin">AKCIJE</h2>
    <a href="{{ route('admin.actions.create') }}">
        <button type="button" class="btn btn-dark" >Dodaj novu akciju</button>
    </a>
    {{ $actions->links() }}

    <table class="table table-striped">
        <thead>
        <tr>
            <th class="firstRowAdmin colorAdmin">RB</th>
            <th class="colorAdmin">NASLOV</th>
            <th class="colorAdmin">VISINA AKCIJE</th>
            <th class="colorAdmin">TEKST</th>
            <th class="colorAdmin">SLIKA</th>
            <th class="colorAdmin">SLIKA2</th>
            <th class="colorAdmin">OD</th>
            <th class="colorAdmin">DO</th>
        </tr>
        </thead>
        <tbody>
        @foreach($actions as $action)
            <tr>
                <td>{{ $action->id }}</td>
                <td>{{ $action->naslov }}</td>
                <td>{{ $action->visina_akcije }}</td>
                <td>{{ $action->tekst }}</td>
                <td>@if($action->slika)<img src="{{ asset('/assets/img/images/akcije/' . $action->slika) }}" class="w-50"> @endif</td>
                <td>@if($action->slika2)<img src="{{ asset('/assets/img/images/akcije/' . $action->slika2) }}" class="w-50"> @endif</td>
                <td>{{ $action->akcija_od }}</td>
                <td>{{ $action->akcija_do }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{ $actions->links() }}
</div>

@endsection
