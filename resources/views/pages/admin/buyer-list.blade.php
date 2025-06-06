@extends('layouts.admin')
@section('content')
Spisak Kupaca
{{ $users->links() }}
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Ime</th>
            <th>Email</th>
            <th>Telefon</th>
            <th>Firma</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->ime }}</td>
            <td>{{ $user->mail }}</td>
            <td>{{ $user->telefon }} <br> @if($user->telefon2) {{ $user->telefon2 }} @endif</td>
            <td>{{ $user->firma }}</td>
        </tr>
    @endforeach

    </tbody>
</table>

    {{ $users->links() }}
@endsection
