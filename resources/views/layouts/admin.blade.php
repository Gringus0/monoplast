<!doctype html>
<html lang="en">

    @include('fixed.head')

<body id="bgAdmin" class="@yield('bodyClass')">

    @if (!Route::is("admin.login-form"))
        <div class="container my-5">
            <div class="row" style="min-height: 400px;">
                @include('fixed.admin-navigation')
                <div class="col-lg-10 col-md-9 col-12 d-flex flex-column justify-content-between">
                    <div class="flex-fill contentAdmin">
                        <div class="w-100 h-100 border rounded">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        @yield('content')
    @endif


    <!-- Bootstrap core JavaScript -->
    @include('fixed.scripts')

</body>
</html>
