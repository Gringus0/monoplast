@extends('layouts.layout')
@section('keywords')

@endsection
@section('content')


<main>
    <div class="col-12 order-2" id="textUnderNav">
        <div class="wrapper">
            <hr/>
                <h4 id="underNavigation">
                    {{ __('messages.galerija_naslov') }}
                </h4>
            <hr/>
        </div>
    </div>





<div class="container-fluid mb-4">
    <div class="row wrapper">
        <div class="col-12">
            <div class="blockGallery">
                <div class="gallery-filters d-flex flex-wrap justify-content-center gap-2 marginTop marginBottom">
                    <a href="{{ route('gallery', ['category' => 'reklamneKese']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija1.jpg')}}" alt="Reklamne kese" class="gallery"/>
                        <div class="overlay-text">{!!__("messages.reklamne_kese")!!}</div>
                    </a>
                    <a href="{{ route('gallery', ['category' => 'trakeZaOznacavanje']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija2.jpg')}}" alt="Trake za označavanje" class="gallery"/>
                        <div class="overlay-text">{!!__("messages.trake_za_oznacavanje")!!}</div>
                    </a>
                    <a href="{{ route('gallery', ['category' => 'dzakovi']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija3.jpg')}}" alt="Džakovi" class="gallery"/>
                        <div class="overlay-text">{!!__("messages.dzakovi")!!}</div>
                    </a>
                    <a href="{{ route('gallery', ['category' => 'strecFolija']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija4.jpg')}}" alt="Streč folija" class="gallery"/>
                        <div class="overlay-text">{!!__("messages.strec_folija")!!}</div>
                    </a>
                    <a href="{{ route('gallery', ['category' => 'zipKese']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija5.jpg')}}" alt="ZIP kese" class="gallery"/>
                        <div class="overlay-text">{!!__("messages.zip_kese")!!}</div>
                    </a>
                    <a href="{{ route('gallery', ['category' => 'tregerice']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija6.jpg')}}" alt="Tregerice" class="gallery"/>
                        <div class="overlay-text">{!!__("messages.treger_kese")!!}</div>
                    </a>
                    <a href="{{ route('gallery', ['category' => 'opsAmbalaza']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija7.jpg')}}" alt="OPS ambalaža" class="gallery"/>
                        <div class="overlay-text">{!!__("messages.opis_ambalaza")!!}</div>
                    </a>
                    <a href="{{ route('gallery', ['category' => 'airBubbleFolija']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija8.jpg')}}" alt="Air Bubble folija" class="gallery"/>
                        <div class="overlay-text">{!!__("messages.vazdusna_air_bubble_folija")!!}</div>
                    </a>
                    <a href="{{ route('gallery', ['category' => 'petAmbalaza']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija9.jpg')}}" alt="PET ambalaža" class="gallery"/>
                        <div class="overlay-text">{!!__("messages.pet_ambalaza")!!}</div>
                    </a>
                    <a href="{{ route('gallery', ['category' => 'peFolija']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija10.jpg')}}" alt="P.E. Folije" class="gallery"/>
                        <div class="overlay-text">{!!__("messages.poli_etilenske_folije_creva_polucreva")!!}</div>
                    </a>
                    <a href="{{ route('gallery', ['category' => 'plastSirokePotrosnje']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija11.jpg')}}" alt="Plast. široke potrošnje" class="gallery"/>
                        <div class="overlay-text">{!!__("messages.plastika_siroke_potrosnje")!!}</div>
                    </a>
                    <a href="{{ route('gallery', ['category' => 'keseZaZamrzivac']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija12.jpg')}}" alt="Kese za zamrzivač" class="gallery"/>
                        <div class="overlay-text">{!!__("messages.kese_za_zamrzivac")!!}</div>
                    </a>
                    <a href="{{ route('gallery', ['category' => 'slikeIzProizvodnje']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija13.jpg')}}" alt="Slike iz proizvodnje monoplast" class="gallery"/>
                        <div class="overlay-text">{!!__("messages.slike_iz_proizvodnje_monoplast")!!}</div>
                    </a>
                    <a href="{{ route('gallery', ['category' => 'sajmovi']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija14.jpg')}}" alt="Slike sa sajmova" class="gallery"/>
                        <div class="overlay-text">{!!__("messages.slike_sa_sajmova")!!}</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="underImageBackGround">
    <div class="wrapper">
        @if(isset($data))
            <div>
                <div class="row">
                    @foreach($data as $kesa)
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                            <img src="{{ asset('/assets/img/images/galerija/' . $kesa->velikaslika) }}"
                                class="galleryImages"
                                data-bs-toggle="modal"
                                data-bs-target="#imageModal"
                                data-img="{{ asset('/assets/img/images/galerija/' . $kesa->velikaslika) }}"
                                alt="{{$kesa->opis}}">
                        </div>
                    @endforeach
                </div>

                <div class="pag">
                    {{ $data->appends(request()->query())->links() }}
                </div>
            </div>
        @endif
    </div>
</div>

<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body text-center underImageBackGround">
                <img id="modalImage" src="" class="img-fluid" alt="Slika">
                <div id="modalDesc" class="mt-3 text-muted"></div>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
            </div>
        </div>
    </div>
</div>





</main>



@endsection
