@extends('layouts.layout')
@section('keywords')

@endsection
@section('content')

<main>

    <div class="row flex-column d-flex d-md-block marginZero">
        <div class="col-12 d-md-none order-1 paddingZero" id="imagesPhone">
            <img src="{{asset('/assets/img/images/flash/01_Homepage-mob_V1.jpg')}}" class="d-block w-100" alt="Biorazgradive i razgradive kese koje se mogu reciklirati - ekološka ambalaža" />
        </div>

    <div class="col-12 order-2" id="textUnderNav">
        <div class="wrapper">
            <hr/>
                <h4 id="underNavigation">
                    {!! __('messages.about_naslov') !!}
                </h4>
            <hr/>
        </div>
    </div>

        <div class="col-12 d-none d-md-block order-3 underImageBackGround">
            <div class="wrapper" id="aboutMainImage">
                <img src="{{asset('/assets/img/images/flash/'. __('messages.slider1'))}}" class="d-block w-100" alt="Biorazgradive i razgradive kese koje se mogu reciklirati - ekološka ambalaža" />
            </div>
        </div>
    </div>

    <div id="aboutContentWrapper" class="wrapper row">
        <div class="col-12 col-xl-2 d-flex flex-column d-none d-xxl-block" id="leftBlockAbout">
            <img src="{{asset('/assets/img/images/onama-malaslika1.jpg')}}" class="d-block aboutImages w-100" alt="Industrijska termopresa za štampu sa kontrolnim panelom"/>
            <img src="{{asset('/assets/img/images/onama-malaslika2.jpg')}}" class="d-block aboutImages w-100" alt="Ekstruziona linija za proizvodnju plastičnih kesa"/>
            <img src="{{asset('/assets/img/images/onama-malaslika3.jpg')}}" class="d-block aboutImages w-100" alt="Radnica koristi mašinu za štampu kese"/>
            <img src="{{asset('/assets/img/images/onama-malaslika4.jpg')}}" class="d-block aboutImages w-100" alt="Mašina za štampu i pakovanje plastičnih kesa u rolni"/>
        </div>
        <div class="col-12 col-xl-6" id="middleBlockAbout">
            <div class="blockPolygon" id="aboutText">
                <p class="marginBottom">
                    {!! __('messages.about_tekst1') !!}
                </p>
                <p class="marginBottom">
                    {!! __('messages.about_tekst2') !!}
                </p>
                <p class="marginBottom">
                    {!! __('messages.about_tekst3') !!}
                </p>
                <p class="marginBottom">
                    {!! __('messages.about_tekst4') !!}
                </p>
                <a class="btn btn-link p-0" id="showMore" data-bs-toggle="collapse" href="#viseTeksta" role="button" aria-expanded="false" aria-controls="viseTeksta">
                    {!! __('messages.about_prikazi_vise') !!}
                </a>
                <div class="collapse" id="viseTeksta">
                    <div>
                        <p class="marginBottom">
                            {!! __('messages.about_tekst5') !!}
                        </p>
                        <p class="marginBottom">
                            {!! __('messages.about_tekst6') !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4 d-flex flex-column" id="rightBlockAbout">
            <div id="rightBlockText">
                <p>
                    {!! __('messages.about_sa_strane') !!}
                </p>
            </div>
            <div id="rightBlockImages" class="d-flex justify-content-around">
                <img src="{{asset('/assets/img/images/819538FB_IMG_1564083527800.jpg')}}" class="d-block aboutImagesRightBlock" alt="Brendirano dostavno vozilo sa reklamnom grafikom"/>
                <img src="{{asset('/assets/img/images/276478Monoplast 20190610_112315.jpg')}}" class="d-block aboutImagesRightBlock" alt="Izgled Zip kese sa klizačem"/>
                <img src="{{asset('/assets/img/images/765835rt-700.jpg')}}" class="d-block aboutImagesRightBlock" alt="Pogled na proizvodni pogon sa industrijskim mašinama"/>
            </div>
            <div class="mt-3 text-center">
                <i class="fa-solid fa-circle circleProducts"></i> <a class="moreGallery" href="{{route('gallery')}}">{!! __('messages.about_pogledaj_galeriju_iz_proizvodnje') !!}</a>
            </div>
             <img src="{{asset('/assets/img/images/onama-velika.jpg')}}" id="rightBlockBigImage" class="d-block w-100 mt-3" alt="Mašina za štampu i sečenje plastičnih kesa sa logotipom"/>
        </div>
    </div>

</main>



@endsection
