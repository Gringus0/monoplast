@extends('layouts.admin')
@section('content')
    {{ $actions->links() }}
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Naslov</th>
            <th>Visina akcije</th>
            <th>Tekst</th>
            <th>Slika</th>
            <th>Slika2</th>
            <th>Od</th>
            <th>Do</th>
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
{{--                <td>{{ $action->slika }}</td>--}}
{{--                <td>{{ $action->slika2 }}</td>--}}
                <td>{{ $action->akcija_od }}</td>
                <td>{{ $action->akcija_do }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>

    {{ $actions->links() }}
@endsection
