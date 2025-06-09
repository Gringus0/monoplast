
@if(\Illuminate\Support\Facades\Auth::check())

    <div class="col-lg-2 col-md-3 col-12 d-flex navigationAdmin">
        <div class="w-100 h-100 ">
            <form action="{{route('admin.logout')}}" method="post">
                @csrf
                <button type="submit" class="logoutBtn">Sign out</button>
            </form>
            <ul class="admin-menu">
                <li class="{{ request()->routeIs('admin.gallery') ? 'active' : '' }}">
                    <a href="{{ route('admin.gallery') }}">Galerija</a>
                </li>
                <li class="{{ request()->routeIs('admin.prices') ? 'active' : '' }}">
                    <a href="{{ route('admin.prices') }}">Cene</a>
                </li>
                <li class="{{ request()->routeIs('admin.list-actions') ? 'active' : '' }}">
                    <a href="{{ route('admin.list-actions') }}">Akcije</a>
                </li>
                <li class="{{ request()->routeIs('admin.buyers') ? 'active' : '' }}">
                    <a href="{{ route('admin.buyers') }}">Spisak kupaca</a>
                </li>
                <li class="{{ request()->routeIs('admin.orders') ? 'active' : '' }}">
                    <a href="{{ route('admin.orders') }}">Porudžbine</a>
                </li>
                <li class="{{ request()->routeIs('admin.edit-bod') ? 'active' : '' }}">
                    <a href="{{ route('admin.edit-bod') }}">Vrednost Boda</a>
                </li>
            </ul>
        </div>
    </div>
 
@endif

