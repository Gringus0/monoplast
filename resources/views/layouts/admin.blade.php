<!doctype html>
<html lang="en">

    @include('fixed.head')

<body id="bgAdmin" class="@yield('bodyClass')">
    {{-- @if(Auth::check()) --}}

    <div class="container my-5">
        <div class="row" style="min-height: 400px;">
            @include('fixed.admin-navigation')
            <div class="col-lg-10 col-md-9 col-12 d-flex flex-column justify-content-between">
                <div class=" mb-3 WelcomeM">
                    <div class="w-100 h-25 ">
                        <h3 class="text-light">Welcome, Monoplast </h3>
                    </div>
                </div>
                <div class="flex-fill contentAdmin vh-100">
                    <div class="w-100 h-100 border rounded" style="min-height: 180px;">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- @endif --}}
    <!-- Bootstrap core JavaScript -->
    @include('fixed.scripts')

</body>
</html>
