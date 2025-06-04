Admin Navigation
@if(\Illuminate\Support\Facades\Auth::check())
    <form action="{{route('admin.logout')}}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
    <ul>
        <li><a href="{{route('admin.gallery')}}">Galerija</a></li>
        <li><a href="{{route('admin.prices')}}">Cene</a></li>
        <li><a href="{{route('admin.list-actions')}}">Akcije</a></li>
        <li><a href="{{route('admin.buyers')}}">Spisak kupaca</a></li>
        <li><a href="{{route('admin.orders')}}">Porudžbine</a></li>
        <li><a href="{{route('admin.edit-bod')}}">Vrednost Boda</a></li>
    </ul>
@endif

