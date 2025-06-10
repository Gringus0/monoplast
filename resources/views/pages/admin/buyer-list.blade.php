@extends('layouts.admin')
@section('content')

<div class="p-4 col-12 text-center">
    <h2 class="d-flex justify-content-center p-4 titleAdmin">SPISAK REGISTROVANIH KUPACA</h2>

    {{ $users->links() }}
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="colorAdmin firstRowAdmin">BR</th>
                <th class="colorAdmin">IME I PREZIME</th>
                <th class="colorAdmin">EMAIL</th>
                <th class="colorAdmin">TELEFON</th>
                <th class="colorAdmin">NAZIV FIRME</th>
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
<div>
    {{ $users->links() }}
@endsection
