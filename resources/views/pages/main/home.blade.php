@extends('layouts.layout')
@section('content')

<main>

    <div id="imagesPhone" class="d-md-none">
      <img src="{{asset('/assets/img/images/flash/01_Homepage-mob_V1.jpg')}}" class="d-block w-100" alt="Biorazgradive i razgradive kese koje se mogu reciklirati - ekološka ambalaža"/>
      <img src="{{asset('/assets/img/images/flash/02_Homepage-mob_V1.jpg')}}" class="d-block w-100" alt="Industrijska mašina za proizvodnju kesa visokog kvaliteta u savremenom pogonu"/>
      <img src="{{asset('/assets/img/images/flash/03_Homepage-mob_V1.jpg')}}" class="d-block w-100" alt="Biorazgradive i razgradive kese koje se mogu reciklirati - Galerija i slike"/>
      <img src="{{asset('/assets/img/images/flash/04_Homepage-mob_V1.jpg')}}" class="d-block w-100" alt="Poručivanje reklamnih kesa sa štampom brendova - izbor dimenzije, boje i tipa"/>
    </div>

    <div class="wrapper">
        <hr/>
        <h4 id="underNavigation">Proizvodnja i štampa reklamnih razgradivih polietilenskih kesa i džakova</h4>
        <hr/>
    </div>

    <div class="slider d-md-block d-none underImageBackGround">
        <div class="wrapper">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('/assets/img/images/flash/slide-1NEW.jpg')}}" class="d-block w-100" alt="Biorazgradive i razgradive kese koje se mogu reciklirati - ekološka ambalaža"/>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('/assets/img/images/flash/monoplast-slide2.jpg')}}" class="d-block w-100" alt="Industrijska mašina za proizvodnju kesa visokog kvaliteta u savremenom pogonu"/>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('/assets/img/images/flash/slide-3NEW.jpg')}}" class="d-block w-100" alt="Biorazgradive i razgradive kese koje se mogu reciklirati - Galerija i slike"/>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('/assets/img/images/flash/slide-4NEW.jpg')}}" class="d-block w-100" alt="Poručivanje reklamnih kesa sa štampom brendova - izbor dimenzije, boje i tipa"/>
                  </div>
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
        <img src="{{asset('/assets/img/images/bcg-bla-galerija.jpg')}}" class="d-block w-100" alt="Desktop slika" />
    </div>
    <!-- Products --> 
    
    <div id="products" class="container-fluid">
      <div class="row wrapper gx-5">
        <div class="col-12 col-lg-4 mb-4">
          <div class="p-3 block borderProducts blockPolygon h-100">
            <p class="productDivTitle">Novo: Zip kese</p>
            <hr/>
            <div class="d-flex flex-column">
              <img src="{{asset('/assets/img/images/899276c_g5.jpg')}}" alt="ZipKesa" class="productsImages"/>
              <div class="contextProducts">
                <p><span class="bold">Kese sa ZIP Zatvaračem:</span></p>
                <ul class="productsList">
                  <li>Jedan Zip zatvarač</li>
                  <li>Dupli Zip zatvarač</li>
                  <li>Zip zatvarač sa Klizačem...</li>
                </ul>
              </div>
            </div>
            <i class="fa-solid fa-circle circleProducts"></i> 
            <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">Galerija proizvoda...</a>
          </div>
        </div>
        <div class="col-12 col-lg-4 mb-4">
          <div class="p-3 block borderProducts blockPolygon h-100">
            <p class="productDivTitle">Proizvodi</p>
            <hr/>
              <div class="contextProducts">
                <ul class="productsList LineHeight">
                  <li>Reklamne kese</li>
                  <li>Trake za označavanje</li>
                  <li>Džakovi</li>
                  <li>Streč folija</li>
                  <li>ZIP kese</li>
                  <li>Tregerice</li>
                  <li>OPS ambalaža</li>
                  <li>Vazdušasta - Air Bubble folija...</li>
                </ul>
              </div>
            <i class="fa-solid fa-circle circleProducts"></i> <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">Saznaj više...</a>
          </div>
        </div>
        <div class="col-12 col-lg-4 mb-4">
          <div class="p-3 block borderProducts blockPolygon h-100 d-flex flex-column justify-content-between">
            <a href=""><img src="{{asset('/assets/img/images/porucite3.png')}}" alt="PoruciteKese" class="order-image"/></a>
            <a href=""><img src="{{asset('/assets/img/images/cenovnik3.png')}}" alt="Cenovnik" class="order-image"/></a>
            <img src="{{asset('/assets/img/images/reciklabilni.png')}}" alt="Reciklirano" class="order-image"/>
          </div>
        </div>
      </div>
    </div>
  
</main>


@endsection
