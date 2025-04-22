<!doctype html>
<html lang="en">

    @include('fixed.head')

<body class="@yield('bodyClass')">

    <!-- Navigation -->
    @include('fixed.admin-navigation')

    <!-- Page Content -->
    @yield('content')

    <!-- Bootstrap core JavaScript -->
    @include('fixed.scripts')

</body>
</html>
