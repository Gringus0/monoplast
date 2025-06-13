<div id="top-header" class="container-fluid mp0">
    <div class="wrapper">
        <div id="lineHeightHeader">
            <div class="d-flex justify-content-between" id="headerNav">
                <p><i class="fa-solid fa-house-chimney marginRight textOrange"></i>Pilota Zorana Latkovica 19, Nova Pazova, 22330</p>
                <p><i class="fa-solid fa-phone marginRight marginLeft textOrange"></i>+381 (22) 239 518</p>
                <p><i class="fa-solid fa-phone marginRight marginLeft textOrange"></i>+381 (65) 336 11 11</p>
                <div>
                    <a href="https://www.facebook.com/www.monoplast.rs/" target="_blank" class="hoverTextOrange noDecA marginRight"><i class="fa-brands fa-facebook-f icon"></i></a>
                    <a href="https://www.instagram.com/monoplast.rs/" target="_blank" class="hoverTextOrange noDecA marginRight"><i class="fa-brands fa-instagram icon marginLeftRight"></i></a>
                    <a href="mailto:monoplast.rs@gmail.com?" target="_blank" class="hoverTextOrange noDecA">
                        <i class="fa-solid fa-envelope"></i>
                    </a>
                </div>


                <div>
                    @if(app()->getLocale() == 'sr')
                        <a href="locale/en">
                            <img
                                id="english"
                                src="{{ asset('/assets/img/images/eng2.jpg') }}"
                                alt="Engleska zastava – Kliknite za promenu jezika"
                                data-hover="{{ asset('/assets/img/images/eng.jpg') }}"
                                data-original="{{ asset('/assets/img/images/eng2.jpg') }}"
                                data-clicked-src="{{ asset('/assets/img/images/eng2.jpg') }}"
                                data-clicked-alt="Srpska zastava – Kliknite za promenu jezika"
                                class="mb-1"
                            />
                        </a>
                    @endif
                    @if(app()->getLocale() == 'en')
                        <a href="locale/sr">
                            <img
                                id="english"
                                src="{{ asset('/assets/img/images/srb1.jpg') }}"
                                alt="Engleska zastava – Kliknite za promenu jezika"
                                data-hover="{{ asset('/assets/img/images/srb1.jpg') }}"
                                data-original="{{ asset('/assets/img/images/srb1.jpg') }}"
                                data-clicked-src="{{ asset('/assets/img/images/srb1.jpg') }}"
                                data-clicked-alt="Srpska zastava – Kliknite za promenu jezika"
                                class="mb-1"
                            />
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


<header>
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid mp0">
                <a class="navbar-brand {{ request()->is('/') || request()->routeIs('home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">
                    <img src="{{asset('/assets/img/monoplast-logo.png')}}" alt="Logo - Monoplast" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link linkhover text-center {{ request()->is('/') || request()->routeIs('home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">{{ __('messages.pocetna') }}</a>
                        </li>
                        <li class="nav-item marginLeftRight">
                            <a class="nav-link linkhover text-center hoverTextOrange {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">{{ __('messages.o_nama') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link linkhover text-center hoverTextOrange  {{ request()->routeIs('products') ? 'active' : '' }}" href="{{ route('products') }}">{{ __('messages.proizvodi') }}</a>
                        </li>
                        @if(app()->getLocale() == 'sr')
                        <li class="nav-item marginLeftRight">
                            <a class="nav-link linkhover text-center hoverTextOrange {{ request()->routeIs('productPrices') ? 'active' : '' }}" href="{{ route('productPrices') }}">{{ __('messages.cenovnik') }}</a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link linkhover text-center hoverTextOrange {{ request()->routeIs('gallery') ? 'active' : '' }}" href="{{ route('gallery') }}">{{ __('messages.galerija') }}</a>
                        </li>
                        @if(app()->getLocale() == 'sr')
                        <li class="nav-item">
                            <a class="nav-link linkhover text-center hoverTextOrange {{ request()->routeIs('actions') ? 'active' : '' }}" href="{{ route('actions') }}">{{ __('messages.akcije') }}</a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link linkhover text-center hoverTextOrange  {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">{{ __('messages.kontakt') }}</a>
                        </li>
                        @if(app()->getLocale() == 'sr')
                            <li class="nav-item">
                                <a class="nav-link linkhover text-center hoverTextOrange pr0 {{ request()->routeIs('order.index') ? 'active' : '' }}" href="{{ route('registerAndLoginForm') }}">{{ __('messages.porucite') }}</a>
                            </li>
                        @endif
                        {{-- <a class="btn btn-outline-primary">
                            @if(app()->getLocale() === 'sr')
                                English
                            @else
                                Srpski
                            @endif
                        </a> --}}



                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
