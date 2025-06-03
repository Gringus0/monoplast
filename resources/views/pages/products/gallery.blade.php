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
                        <div class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija1.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">Reklamne kese</div>
                        </div>
                        <div class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija2.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">Trake za <br/>označavanje</div>
                        </div>
                        <div class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija3.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">Džakovi</div>
                        </div>
                        <div class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija4.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">Streč folija</div>
                        </div>
                        <div class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija5.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">ZIP kese</div>
                        </div>
                        <div class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija6.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">Tregerice</div>
                        </div>
                        <div class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija7.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">OPS ambalaža</div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between marginTop marginBottom">
                        <div class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija8.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">Air Bubble<br/> folija</div>
                        </div>
                        <div class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija9.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">PET ambalaža</div>
                        </div>
                        <div class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija10.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">P.E. Folije</div>
                        </div>
                        <div class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija11.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">Plast. široke <br/>potrošnje</div>
                        </div>
                        <div class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija12.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">Kese za <br/>zamrzivač</div>
                        </div>
                        <div class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija13.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">Slike iz <br/>proizvodnje</div>
                        </div>
                        <div class="gallery-item">
                            <img src="{{asset('/assets/img/images/galerija14.jpg')}}" alt="ZipKesa" class="gallery"/>
                            <div class="overlay-text">Sajmovi</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


{{--'reklamneKese' => $reklamneKese,--}}
{{--'trakeZaOznacavanje' => $trakeZaOznacavanje,--}}
{{--'dzakovi' => $dzakovi,--}}
{{--'strecFolija' => $strecFolija,--}}
{{--'zipKese' => $zipKese,--}}
{{--'tregerice' => $tregerice,--}}
{{--'opsAmbalaza' => $opsAmbalaza,--}}
{{--'airBubbleFolija' => $airBubbleFolija,--}}
{{--'petAmbalaza' => $petAmbalaza,--}}
{{--'peFolija' => $peFolija,--}}
{{--'plastSirokePorosnje' => $plastSirokePorosnje,--}}
{{--'keseZaZamrzivac' => $keseZaZamrzivac,--}}
{{--'slikeIzProizvodnje' => $slikeIzProizvodnje,--}}
{{--'sajmovi' => $sajmovi--}}

{{--    @foreach($reklamneKese as $kesa)--}}
{{--        {{$kesa->velikaslika}} <br>--}}
{{--    @endforeach--}}

@endsection
