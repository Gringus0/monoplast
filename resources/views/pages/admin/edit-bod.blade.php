@extends('layouts.admin')
@section('content')
    Edit bod
    <form action="{{ route('admin.edit-bod.update') }}" method="POST" class="col-4 m-5">
        @csrf
        <div class="mb-3">
            <label class="form-label">Bod:</label>
            <input type="number" class="form-control" name="bod" value="{{$bod->vrednost}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @if(session('success'))
        {{ session('success') }}
    @endif
    @if(session('error'))
        {{ session('error') }}
    @endif
@endsection
