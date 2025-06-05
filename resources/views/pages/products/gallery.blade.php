@extends('layouts.layout')
@section('content')


<main>
    <div class="col-12 order-2" id="textUnderNav">
        <div class="wrapper">
            <hr/>
                <h4 id="underNavigation">
                    Galerija naših proizvoda
                </h4>
            <hr/>
        </div>
    </div>





    <div class="container-fluid">
        <div class="row wrapper">
            <div class="col-12">
                <div class="blockGallery">
                    <div class="d-flex justify-content-between marginTop marginBottom">
                        <a href="{{ route('gallery', ['category' => 'reklamneKese']) }}" class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija1.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">Reklamne kese</div>
                        </a>
                        <a href="{{ route('gallery', ['category' => 'trakeZaOznacavanje']) }}" class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija2.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">Trake za <br/>označavanje</div>
                        </a>
                        <a href="{{ route('gallery', ['category' => 'dzakovi']) }}" class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija3.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">Džakovi</div>
                        </a>
                        <a href="{{ route('gallery', ['category' => 'strecFolija']) }}" class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija4.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">Streč folija</div>
                        </a>
                        <a href="{{ route('gallery', ['category' => 'zipKese']) }}" class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija5.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">ZIP kese</div>
                        </a>
                        <a href="{{ route('gallery', ['category' => 'tregerice']) }}" class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija6.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">Tregerice</div>
                        </a>
                        <a href="{{ route('gallery', ['category' => 'opsAmbalaza']) }}" class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija7.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">OPS ambalaža</div>
                        </a>
                    </div>
                    <div class="d-flex justify-content-between marginTop marginBottom">
                        <a href="{{ route('gallery', ['category' => 'airBubbleFolija']) }}" class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija8.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">Air Bubble<br/> folija</div>
                        </a>
                        <a href="{{ route('gallery', ['category' => 'petAmbalaza']) }}" class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija9.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">PET ambalaža</div>
                        </a>
                        <a href="{{ route('gallery', ['category' => 'peFolija']) }}" class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija10.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">P.E. Folije</div>
                        </a>
                        <a href="{{ route('gallery', ['category' => 'plastSirokePotrosnje']) }}" class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija11.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">Plast. široke <br/>potrošnje</div>
                        </a>
                        <a href="{{ route('gallery', ['category' => 'keseZaZamrzivac']) }}" class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija12.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">Kese za <br/>zamrzivač</div>
                        </a>
                        <a href="{{ route('gallery', ['category' => 'slikeIzProizvodnje']) }}" class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija13.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">Slike iz <br/>proizvodnje</div>
                        </a>
                        <a href="{{ route('gallery', ['category' => 'sajmovi']) }}" class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija14.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">Sajmovi</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @if(isset($data))
        <div>
            {{ $data->appends(request()->query())->links() }}
            @foreach($data as $kesa)
                <img src="{{ asset('/assets/img/images/galerija/' . $kesa->velikaslika) }}">
            @endforeach
        </div>
    @endif


</main>



@endsection
