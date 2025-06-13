@extends('layouts.layout')
@section('keywords')

@endsection
@section('content')

    <main>
        <div class="row flex-column d-flex d-md-block marginZero">
        <div class="col-12 d-md-none order-1 paddingZero" id="imagesPhone">
            <img src="{{asset('/assets/img/images/flash/'. __('messages.slider3'))}}" class="d-block w-100" alt="Industrijska mašina za proizvodnju kesa visokog kvaliteta u savremenom pogonu" />
        </div>

    <div class="col-12 order-2" id="textUnderNav">
        <div class="wrapper">
            <hr/>
                <h4 id="underNavigation">
                    {{ __('messages.proizvodi_naslov') }}
                </h4>
            <hr/>
        </div>
    </div>

        <div class="col-12 d-none d-md-block order-3 underImageBackGround">
            <div class="wrapper" id="aboutMainImage">
                <img src="{{asset('/assets/img/images/flash/'. __('messages.slider2'))}}" class="d-block w-100" alt="Industrijska mašina za proizvodnju kesa visokog kvaliteta u savremenom pogonu" />

            </div>
        </div>
    </div>


    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 borderBottomProducts">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-4">
                        <img src="{{asset('/assets/img/images/prozvodSlika1.jpg')}}" alt="Reklamne kese sa štampom logotipa" class="productsImages mx-auto d-block w-100 aboutImages"/>
                    </div>
                        <div class="col-12 col-lg-8 products-product textColorProducts">
                            <h5>{!! __('messages.reklamne_kese') !!}</h5>
                            <div>
                                <p>
                                    {{ __('messages.reklamne_kese_tekst') }}
                                </p>
                            </div>
                            <i class="marginTop fa-solid fa-circle circleProducts"></i>
                            <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">{{ __('messages.pogledaj_galeriju') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 borderBottomProducts">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-4">
                        <img src="{{asset('/assets/img/images/trake-za-kros.jpg')}}" alt="Trake za obeležavanje prostora ili paketa" class="productsImages mx-auto d-block w-100 aboutImages"/>
                        </div>
                        <div class="col-12 col-lg-8 products-product textColorProducts">
                            <h5>{!! __('messages.trake_za_oznacavanje') !!}</h5>
                            <div>
                                <p>
                                    {{ __('messages.trake_za_oznacavanje_tekst') }}
                                </p>
                            </div>
                            <i class="marginTop fa-solid fa-circle circleProducts"></i>
                            <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">{{ __('messages.pogledaj_galeriju') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 borderBottomProducts">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-4">
                        <img src="{{asset('/assets/img/images/dzakovi.jpg')}}" alt="Industrijski džakovi za pakovanje i skladištenje" class="productsImages mx-auto d-block w-100 aboutImages"/>
                        </div>
                        <div class="col-12 col-lg-8 products-product textColorProducts">
                            <h5>{!! __('messages.dzakovi') !!}</h5>
                            <div>
                                <p>
                                    {{ __('messages.dzakovi_tekst') }}
                                </p>
                            </div>
                            <i class="marginTop fa-solid fa-circle circleProducts"></i>
                            <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">{{ __('messages.pogledaj_galeriju') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 borderBottomProducts">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-4">
                        <img src="{{asset('/assets/img/images/strec-folija.jpg')}}" alt="Stretch folija za obmotavanje paleta" class="productsImages mx-auto d-block w-100 aboutImages"/>
                        </div>
                        <div class="col-12 col-lg-8 products-product textColorProducts">
                            <h5> {!! __('messages.strec_folija') !!}</h5>
                            <div>
                                <p>
                                    {{ __('messages.strec_folija_tekst') }}
                                </p>
                                <ul class="productsLi">
                                    <li>{!!__('messages.strec_folija_tekst_li')!!}</li>
                                </ul>
                            </div>
                            <i class="marginTop fa-solid fa-circle circleProducts"></i>
                            <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">{{ __('messages.pogledaj_galeriju') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 borderBottomProducts">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-4">
                        <img src="{{asset('/assets/img/images/zip-kese.jpg')}}" alt="ZIP kese sa zatvaračem" class="productsImages mx-auto d-block w-100 aboutImages"/>
                        </div>
                        <div class="col-12 col-lg-8 products-product textColorProducts">
                            <h5>{!! __('messages.zip_kese') !!}</h5>
                            <div>
                                <p>
                                    {{ __('messages.zip_kese_tekst') }}
                                </p>
                            </div>
                            <i class="marginTop fa-solid fa-circle circleProducts"></i>
                            <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">{{ __('messages.pogledaj_galeriju') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 borderBottomProducts">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-4">
                        <img src="{{asset('/assets/img/images/tregerice.jpg')}}" alt="Tregerice – kese sa ručkama za nošenje" class="productsImages mx-auto d-block w-100 aboutImages"/>
                        </div>
                        <div class="col-12 col-lg-8 products-product textColorProducts">
                            <h5>{!! __('messages.treger_kese') !!}</h5>
                            <div>
                                <p>
                                    {{ __('messages.treger_kese_tekst') }}
                                </p>
                            </div>
                            <i class="marginTop fa-solid fa-circle circleProducts"></i>
                            <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">{{ __('messages.pogledaj_galeriju') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 borderBottomProducts">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-4">
                        <img src="{{asset('/assets/img/images/ops-ambalaza.jpg')}}" alt="OPS ambalaža za prehrambene proizvode" class="productsImages mx-auto d-block w-100 aboutImages"/>
                        </div>
                        <div class="col-12 col-lg-8 products-product textColorProducts">
                            <h5>{!! __('messages.opis_ambalaza') !!}</h5>
                            <div>
                                <p>
                                    {{ __('messages.opis_ambalaza_tekst') }}
                                </p>
                            </div>
                            <i class="marginTop fa-solid fa-circle circleProducts"></i>
                            <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">{{ __('messages.pogledaj_galeriju') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 borderBottomProducts">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-4">
                        <img src="{{asset('/assets/img/images/air-bubble.jpg')}}" alt="Air bubble folija za zaštitu u transportu" class="productsImages mx-auto d-block w-100 aboutImages"/>
                        </div>
                        <div class="col-12 col-lg-8 products-product textColorProducts textColorProducts">
                            <h5>{!! __('messages.vazdusna_air_bubble_folija') !!}</h5>
                            <div>
                                <p>
                                    {{ __('messages.vazdusna_air_bubble_folija_tekst') }}
                                </p>
                            </div>
                            <i class="marginTop fa-solid fa-circle circleProducts"></i>
                            <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">{{ __('messages.pogledaj_galeriju') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 borderBottomProducts">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-4">
                        <img src="{{asset('/assets/img/images/pp-ambalaza.jpg')}}" alt="PET ambalaža za piće i prehranu" class="productsImages mx-auto d-block w-100 aboutImages"/>
                        </div>
                        <div class="col-12 col-lg-8 products-product textColorProducts textColorProducts">
                            <h5>{!! __('messages.pet_ambalaza') !!}</h5>
                            <div>
                                <p>
                                    {{ __('messages.pet_ambalaza_tekst') }}
                                </p>
                            </div>
                            <i class="marginTop fa-solid fa-circle circleProducts"></i>
                            <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">{{ __('messages.pogledaj_galeriju') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 borderBottomProducts">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-4">
                        <img src="{{asset('/assets/img/images/stiropor-ambalaza.jpg')}}" alt="PE folije – polietilenske folije za pakovanje" class="productsImages mx-auto d-block w-100 aboutImages"/>
                        </div>
                        <div class="col-12 col-lg-8 products-product textColorProducts textColorProducts">
                            <h5>{!! __('messages.poli_etilenske_folije_creva_polucreva') !!}</h5>
                            <div>
                                <p>
                                    {{ __('messages.poli_etilenske_folije_creva_polucreva_tekst') }}
                                </p>
                            </div>
                            <i class="marginTop fa-solid fa-circle circleProducts"></i>
                            <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">{{ __('messages.pogledaj_galeriju') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 borderBottomProducts">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-4">
                        <img src="{{asset('/assets/img/images/plastika-siroke-potrosnje.jpg')}}" alt="Plastični proizvodi za široku potrošnju" class="productsImages mx-auto d-block w-100 aboutImages"/>
                        </div>
                        <div class="col-12 col-lg-8 products-product textColorProducts textColorProducts">
                            <h5>{!! __('messages.plastika_siroke_potrosnje') !!}</h5>
                            <div>
                                <p>
                                    {{ __('messages.plastika_siroke_potrosnje_tekst') }}
                                </p>
                            </div>
                            <i class="marginTop fa-solid fa-circle circleProducts"></i>
                            <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">{{ __('messages.pogledaj_galeriju') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 borderBottomProducts">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-4">
                        <img src="{{asset('/assets/img/images/kese-za-zamrzivac.jpg')}}" alt="Kese za zamrzivač sa mogućnošću štampe" class="productsImages mx-auto d-block w-100 aboutImages"/>
                        </div>
                        <div class="col-12 col-lg-8 products-product textColorProducts textColorProducts">
                            <h5>{!! __('messages.kese_za_zamrzivac') !!}</h5>
                            <div>
                                <p>
                                    {{ __('messages.kese_za_zamrzivac_tekst') }}
                                </p>
                            </div>
                            <i class="marginTop fa-solid fa-circle circleProducts"></i>
                            <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">{{ __('messages.pogledaj_galeriju') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>



@endsection
