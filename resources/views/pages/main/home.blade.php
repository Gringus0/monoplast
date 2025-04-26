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
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('/assets/img/images/flash/slide-1NEW.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('/assets/img/images/flash/slide-2NEW.jpg')}}" class="d-block w-100" alt="...">
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
    
</main>


@endsection
