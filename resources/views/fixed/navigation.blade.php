<div id="top-header" class="container-fluid mp0">
    <div class="wrapper">
        <div id="lineHeightHeader">
            <div class="d-flex justify-content-between" id="headerNav">
                <p><i class="fa-solid fa-house-chimney marginRight textOrange"></i>Pilota Zorana Latkovica 19, Nova Pazova, 22330</p>
                <p><i class="fa-solid fa-phone marginRight marginLeft textOrange"></i>+381 (22) 239 518</p>
                <p><i class="fa-solid fa-phone marginRight marginLeft textOrange"></i>+381 (65) 336 11 11</p>
                <div>
                    <a href="https://www.facebook.com" target="_blank" class="hoverTextOrange noDecA marginRight"><i class="fa-brands fa-facebook-f icon"></i></a>
                    <a href="https://www.instagram.com" target="_blank" class="hoverTextOrange noDecA marginRight"><i class="fa-brands fa-instagram icon marginLeftRight"></i></a>
                    <a href="https://www.instagram.com" target="_blank" class="hoverTextOrange noDecA"><i class="fa-solid fa-envelope"></i></a>

                    <!-- Dodati outlook opciju za envelope -->

                </div>
            </div>
        </div>
    </div>
</div>


<header>
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid mp0">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('/assets/img/monoplast-logo.png')}}" alt="Logo" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link linkhover text-center {{ request()->is('/') || request()->routeIs('home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Pocetna</a>
                        </li>
                        <li class="nav-item marginLeftRight">
                            <a class="nav-link linkhover text-center hoverTextOrange {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">O nama</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link linkhover text-center hoverTextOrange  {{ request()->routeIs('products') ? 'active' : '' }}" href="{{ route('products') }}">Proizvodi</a>
                        </li>
                        <li class="nav-item marginLeftRight">
                            <a class="nav-link linkhover text-center hoverTextOrange {{ request()->routeIs('productPrices') ? 'active' : '' }}" href="{{ route('productPrices') }}">Cenovnik</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link linkhover text-center hoverTextOrange {{ request()->routeIs('gallery') ? 'active' : '' }}" href="{{ route('gallery') }}">Galerija</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link linkhover text-center hoverTextOrange  {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Kontakt</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link linkhover text-center hoverTextOrange pr0 {{ request()->routeIs('order') ? 'active' : '' }}" href="{{ route('contact') }}">Porucite</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
