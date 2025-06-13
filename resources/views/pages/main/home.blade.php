@extends('layouts.layout')
@section('keywords')

@endsection
@section('content')

    <main>

        <div id="imagesPhone" class="d-md-none">
            <img src="{{asset('/assets/img/images/flash/01_Homepage-mob_V1.jpg')}}" class="d-block w-100" alt="{{ __('messages.recyclable_image_alt') }}"/>
            <img src="{{asset('/assets/img/images/flash/02_Homepage-mob_V1.jpg')}}" class="d-block w-100" alt="Industrijska mašina za proizvodnju kesa visokog kvaliteta u savremenom pogonu"/>
            <img src="{{asset('/assets/img/images/flash/03_Homepage-mob_V1.jpg')}}" class="d-block w-100" alt="Biorazgradive i razgradive kese koje se mogu reciklirati - Galerija i slike"/>
            <img src="{{asset('/assets/img/images/flash/04_Homepage-mob_V1.jpg')}}" class="d-block w-100" alt="Poručivanje reklamnih kesa sa štampom brendova - izbor dimenzije, boje i tipa"/>
        </div>

        <div class="wrapper">
            <hr/>
            <h4 id="underNavigation">{{ __('messages.homepage_title') }}</h4>
            <hr/>
        </div>

        <div class="slider d-md-block d-none underImageBackGround">
            <div class="wrapper">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        @if(app()->getLocale()=="sr")
                            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        @endif
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('/assets/img/images/flash/'. __('messages.slider1'))}}" class="d-block w-100" alt="{{ __('messages.recyclable_image_alt') }}"/>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('/assets/img/images/flash/'. __('messages.slider2'))}}" class="d-block w-100" alt="Industrijska mašina za proizvodnju kesa visokog kvaliteta u savremenom pogonu"/>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('/assets/img/images/flash/'. __('messages.slider3'))}}" class="d-block w-100" alt="Biorazgradive i razgradive kese koje se mogu reciklirati - Galerija i slike"/>
                        </div>
                        @if(app()->getLocale()=="sr")
                        <div class="carousel-item">
                            <img src="{{asset('/assets/img/images/flash/'. __('messages.slider4'))}}" class="d-block w-100" alt="Poručivanje reklamnih kesa sa štampom brendova - izbor dimenzije, boje i tipa"/>
                        </div>
                        @endif
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="wrapper">
            <img src="{{asset('/assets/img/images/bcg-bla-galerija.jpg')}}" class="d-block w-100" alt="Linija" />
        </div>

        <!-- Products -->
        <div id="products" class="container-fluid">
            <div class="row wrapper gx-5">
                @if(app()->getLocale() == 'sr')
                    <div class="col-12 col-lg-4 mb-4">
                        <div class="p-3 block borderProducts blockPolygon h-100">
                            <p class="productDivTitle">{{ __('messages.new_zip_bags') }}</p>
                            <hr/>
                            <div class="d-flex flex-column">
                                <img src="{{asset('/assets/img/images/899276c_g5.jpg')}}" alt="Zip - Kesa" class="productsImages"/>
                                <div class="contextProducts">
                                    <p><span class="bold">{{ __('messages.zip_bags_title') }}</span></p>
                                    <ul class="productsList">
                                        @foreach(__('messages.zip_bags_items') as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <i class="fa-solid fa-circle circleProducts"></i>
                            <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">{{ __('messages.product_gallery_link') }}</a>
                        </div>
                    </div>
                @endif
                <div class="col-12 col-lg-4 mb-4">
                    <div class="p-3 block borderProducts blockPolygon h-100">
                        <p class="productDivTitle">{{ __('messages.products_title') }}</p>
                        <hr/>
                        <div class="contextProducts">
                            <ul class="productsList LineHeight">
                                @foreach(__('messages.products_list') as $product)
                                    <li>{{ $product }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <i class="fa-solid fa-circle circleProducts"></i>
                        <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">{{ __('messages.learn_more_link') }}</a>
                    </div>
                </div>
                @if(app()->getLocale() == 'sr')
                    <div class="col-12 col-lg-4 mb-4">
                        <div class="p-3 block borderProducts blockPolygon h-100 d-flex flex-column justify-content-between">
                            <a class="{{ request()->routeIs('order.index') ? 'active' : '' }}" href="{{ route('registerAndLoginForm') }}">
                                <img src="{{asset('/assets/img/images/porucite3.png')}}" alt="{{ __('messages.order_image_alt') }}" class="order-image"/>
                            </a>
                            <a class="{{ request()->routeIs('order.index') ? 'active' : '' }}" href="{{ route('productPrices') }}">
                                <img src="{{asset('/assets/img/images/cenovnik3.png')}}" alt="{{ __('messages.prices_image_alt') }}" class="order-image"/>
                            </a>
                            <img src="{{asset('/assets/img/images/reciklabilni.png')}}" alt="{{ __('messages.recyclable_image_alt') }}" class="order-image"/>
                        </div>
                    </div>
                @endif
            </div>
        </div>

    </main>

@endsection
