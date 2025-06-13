<footer class="container-fluid" id="footerFluid">
    <div class="wrapper">
        <div class="row">
            <div class="col-12 col-xl-4 col-md-6" id="footerLogo">
                <img src="{{ asset('/assets/img/monoplast-logo.png') }}" alt="Logo - Monoplast" class="logo logotfooter" />
                <p class="mb-4">{{ __('messages.footer_about_text') }}</p>
                <a href="https://www.facebook.com/www.monoplast.rs/" target="_blank"><i class="fa-brands fa-facebook iconFooter"></i></a>
                <a href="https://www.instagram.com/monoplast.rs/" target="_blank"><i class="fa-brands fa-instagram iconFooter"></i></a>
                <a href="mailto:monoplast.rs@gmail.com?" target="_blank"><i class="fa-regular fa-envelope iconFooter"></i></a>
            </div>

            <div class="col-12 col-xl-3 col-md-6" id="footerContact">
                <h4 class="footerSubjects">{{ __('messages.footer_contact_title') }}</h4>
                <ul>
                    <li>
                        <p class="colorText">
                            <span class="iconFooterContact">
                                <i class="fa-solid fa-house-chimney marginRight icon"></i>
                            </span>
                            {{ __('messages.footer_address') }}
                        </p>
                    </li>
                    <li>
                        <p class="colorText">
                            <span class="iconFooterContact">
                                <i class="fa-solid fa-envelope marginRight icon"></i>
                            </span>
                            {{ __('messages.footer_email') }}
                        </p>
                    </li>
                    <li class="d-flex justify-content-start phoneIcon">
                        <p class="colorText">
                            <span class="iconFooterContact">
                                <i class="fa-solid fa-phone marginRight icon"></i>
                            </span>
                        <ul class="ulNone">
                            <li>{{ __('messages.footer_phone_1') }}</li>
                            <li>{{ __('messages.footer_phone_2') }}</li>
                            <li>{{ __('messages.footer_phone_3') }}</li>
                        </ul>
                        </p>
                    </li>
                </ul>
            </div>

            <div class="col-12 col-xl-2 col-md-6" id="footerNav">
                <h4 class="footerSubjects">{{ __('messages.footer_monoplast_title') }}</h4>
                <ul id="navFooterList">
                    <a href="{{ route('home') }}" class="hoverTextOrange"><li class="mb-1">{{ __('messages.pocetna') }}</li></a>
                    <a href="{{ route('about') }}" class="hoverTextOrange"><li>{{ __('messages.o_nama') }}</li></a>
                    <a href="{{ route('gallery') }}" class="hoverTextOrange"><li class="mb-1 mt-1">{{ __('messages.proizvodi') }}</li></a>
                    <a href="{{ route('productPrices') }}" class="hoverTextOrange"><li>{{ __('messages.cenovnik') }}</li></a>
                    <a href="{{ route('actions') }}" class="hoverTextOrange"><li class="mb-1 mt-1">{{ __('messages.akcije') }}</li></a>
                    <a href="{{ route('contact') }}" class="hoverTextOrange"><li>{{ __('messages.kontakt') }}</li></a>
                    <a href="{{ route('registerAndLoginForm') }}" class="hoverTextOrange"><li class="mb-1 mt-1">{{ __('messages.porucite') }}</li></a>
                </ul>
            </div>

            <div class="col-12 col-xl-3 col-md-6" id="footerGallery">
                <h4 class="footerSubjects text-center">{{ __('messages.footer_gallery_title') }}</h4>
                <div>
                    <div class="row p-2">
                        @foreach (['galerija10.jpg', 'galerija2.jpg', 'galerija8.jpg'] as $img)
                            <div class="col-4 p-0 text-center">
                                <a href="{{ route('gallery') }}">
                                    <img class="border imgFooter" src="{{ asset('/assets/img/images/' . $img) }}" alt="" />
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="row p-2">
                        @foreach (['galerija7.jpg', 'galerija1.jpg', 'galerija6.jpg'] as $img)
                            <div class="col-4 p-0 text-center">
                                <a href="{{ route('gallery') }}">
                                    <img class="border imgFooter" src="{{ asset('/assets/img/images/' . $img) }}" alt="" />
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="underfooter" class="container-fluid">
    <div class="wrapper text-center">
        <p>{{ __('messages.footer_copyright') }}</p>
    </div>
</div>
