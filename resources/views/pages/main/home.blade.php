@extends('layouts.layout')
@section('content')

<main>
    <div class="wrapper">
        <hr/>
        <h4 id="underNavigation">Proizvodnja i štampa reklamnih razgradivih polietilenskih kesa i džakova</h4>
        <hr/>
    </div>

    <div class="slider">
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
                    <img src="{{asset('/assets/img/images/flash/slide-1NEW.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('/assets/img/images/flash/monoplast-slide2.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('/assets/img/images/flash/slide-3NEW.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('/assets/img/images/flash/slide-4NEW.jpg')}}" class="d-block w-100" alt="...">
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
    
    <!-- Products -->
    
    <div id="products" class="container-fluid">
      <div class="row wrapper gx-5">
        <div class="col-12 col-lg-4 ">
          <div class="p-3 block borderProducts">
            <p class="productDivTitle">Novo u prodaji zipp kese</p>
            <hr/>
            <div class="d-flex justify-content-between">
              <img src="{{asset('/assets/img/images/899276c_g5.jpg')}}" alt="slika" class="productsImages"/>
              <div class="contextProducts">
                <p><span class="bold"> Kese sa ZIP Zatvaračem:</span></p>
                <ul class="productsList">
                  <li>Jedan Zip zatvarač</li>
                  <li>Dupli Zip zatvarač</li>
                  <li>Zip zatvarač sa Klizačem...</li>
                </ul>
              </div>
            </div>
            <a id="moreGallery" href="">Galerija proizvoda</a>
          </div>
        </div>
        <div class="col-12 col-lg-4 ">
          <div class="p-3 block borderProducts">
            <p class="productDivTitle">Proizvodi</p>
            <hr/>
              <div class="contextProducts">
                <p><span class="bold"> Proizvodi u ponudi</span></p>
                <ul class="productsList LineHeight">
                  <li>Reklamne kese</li>
                  <li>Trake za označavanje</li>
                  <li>Džakovi</li>
                  <li>ZIP kese</li>
                  <li>Vazdušasta - Air Bubble folija ...</li>
                </ul>
              </div>
            <a id="moreGallery" href="">Saznaj više</a>
          </div>
        </div>
        <div class="col-12 col-lg-4 ">
          <div class="p-3 block borderProducts">
            <p class="productDivTitle">Novo u prodaji zipp kese</p>
            <hr/>
            <div class="d-flex justify-content-between">
              <img src="{{asset('/assets/img/images/899276c_g5.jpg')}}" alt="slika" class="productsImages"/>
              <div class="contextProducts">
                <p><span class="bold"> Kese sa ZIP Zatvaračem:</span></p>
                <ul class="productsList">
                  <li>Jedan Zip zatvarač</li>
                  <li>Dupli Zip zatvarač</li>
                  <li>Zip zatvarač sa Klizačem...</li>
                </ul>
              </div>
            </div>
            <a id="moreGallery" href="">Galerija proizvoda</a>
          </div>
        </div>
      </div>
    </div>
  
</main>


@endsection
