@extends('layouts.layout')
@section('content')

<main>

    <div class="wrapper">
        <hr/>
        <h4 id="underNavigation">Proizvodnja i štampa reklamnih razgradivih polietilenskih kesa i džakovaf</h4>
        <hr/>
    </div>

    <div class="underImageBackGround">
        <div class="wrapper" id="aboutMainImage">
            <img src="{{asset('/assets/img/images/flash/slide-1NEW.jpg')}}" class="d-block w-100" alt="Biorazgradive i razgradive kese koje se mogu reciklirati - ekološka ambalaža"/>
        </div>
    </div>

    <div class="wrapper row">
        <div class="col-2 d-flex flex-column" id="leftBlockAbout">
            <img src="{{asset('/assets/img/images/onama-malaslika1.jpg')}}" class="d-block aboutImages" alt="..."/>
            <img src="{{asset('/assets/img/images/onama-malaslika2.jpg')}}" class="d-block aboutImages" alt="..."/>
            <img src="{{asset('/assets/img/images/onama-malaslika3.jpg')}}" class="d-block aboutImages" alt="..."/>
            <img src="{{asset('/assets/img/images/onama-malaslika4.jpg')}}" class="d-block aboutImages" alt="..."/>
        </div>
        <div class="col-6" id="middleBlockAbout">
            <div class="blockPolygon" id="aboutText">
                <p class="marginBottom">
                    Preduzeće <strong>"Monoplast" d.o.o</strong> je osnovano 01.02.1994. godine, sa sedištem u Novoj Pazovi, ulica Pilota Zorana Latkovića broj 19. Prvobitna zanatska radnja <em>Grafiko</em> prerasta u Monoplast d.o.o., preduzeće specijalizovano za proizvodnju, štampu i prodaju polietilenske (P.E.) ambalaže - najlon kesa i džakova.
                </p>
                <p class="marginBottom">
                    <strong>Radimo na najsavremenijim mašinama koje obezbeđuju visok kvalitet finalnog proizvoda.</strong> Kapaciteti proizvodnje su relativno veliki, što znači da će Vaša porudžbina biti obrađena brzo i efikasno – finalni proizvod, Vašu kesu, možete dobiti u najkraćem roku.
                </p>
                <p class="marginBottom">
                    <strong>Proizvodnja kesa se vrši i po narudžbini, gde Vi birate debljinu, veličinu, boju i slično.</strong> Za veće tiraže, u mogućnosti smo da radimo i <strong>flexol štampu</strong> u jednoj ili više boja. U našem proizvodnom programu nalaze se i treger kese sa štampom.
                </p>
                <p class="marginBottom">
                    Pored same proizvodnje P.E. ambalaže, <strong>"Monoplast" d.o.o</strong> se bavi i proizvodnjom plastike široke potrošnje, kao i trgovinom, uvozom i izvozom.
                </p>
                <p class="marginBottom">
                    Ukoliko želite da na Vašim kesama odštampate zaštitni znak firme, reklamnu poruku ili možda sliku proizvoda - to možete učiniti u jednoj, dve, tri ili više boja. Naši grafičari će, po Vašem zahtevu, uraditi pripremu za štampu koristeći vrhunsku kompjutersku opremu i lasersko štampanje.
                </p>
                <p class="marginBottom"> 
                    Nudimo Vam blanko i štampane kese i džakove raznih boja i veličina. I to nije sve! Pošto se u našim kesama nose proizvodi različite težine, po Vašem zahtevu, sve kese možemo proizvesti sa ojačanim ili plastičnim ručkama. Naše kese se proizvode od najkvalitetnijih materijala, u raznim bojama, a po Vašoj želji, na kesama vršimo štampu u jednoj ili više boja.
                </p>
            </div>
        </div>
        <div class="col-4 d-flex flex-column rightBlockAbout">
            <div id="rightBlockText">
                <p>
                    Zadovoljna mušterija, i visok kvalitet proizvoda, uz
                    obavezno poštovanje rokova, naše su trajno opredeljenje. Biće nam drago, ukoliko nas izaberete za svog proizvođača P.E. ambalaže
                </p>
            </div>
            <div id="rightBlockImages" class="d-flex justify-content-around">
                <img src="{{asset('/assets/img/images/819538FB_IMG_1564083527800.jpg')}}" class="d-block aboutImagesRightBlock" alt="..."/>
                <img src="{{asset('/assets/img/images/276478Monoplast 20190610_112315.jpg')}}" class="d-block aboutImagesRightBlock" alt="..."/>
                <img src="{{asset('/assets/img/images/765835rt-700.jpg')}}" class="d-block aboutImagesRightBlock" alt="..."/>
            </div>
            <div class="mt-3 text-center">
                <i class="fa-solid fa-circle circleProducts"></i> <a id="moreGallery" href="{{route('productsWithGallery')}}">pogledaj galeriju iz proizvodnje...</a>
            </div>
             <img src="{{asset('/assets/img/images/onama-velika.jpg')}}" class="d-block w-100 mt-3" alt="..."/>
        </div>
    </div>

</main>



@endsection
