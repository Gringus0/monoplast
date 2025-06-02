@extends('layouts.layout')
@section('content')


<main>
    <div class="container-fluid">
        <div class="row wrapper">
            <div class="col-12">
                <div class="blockGallery">
                    <img src="{{asset('/assets/img/images/galerija1.jpg')}}" alt="ZipKesa" class="gallery"/>
                    <img src="{{asset('/assets/img/images/galerija2.jpg')}}" alt="ZipKesa" class="gallery"/>
                    <img src="{{asset('/assets/img/images/galerija3.jpg')}}" alt="ZipKesa" class="gallery"/>
                    <img src="{{asset('/assets/img/images/galerija4.jpg')}}" alt="ZipKesa" class="gallery"/>
                    <img src="{{asset('/assets/img/images/galerija5.jpg')}}" alt="ZipKesa" class="gallery"/>
                    <img src="{{asset('/assets/img/images/galerija6.jpg')}}" alt="ZipKesa" class="gallery"/>
                    <img src="{{asset('/assets/img/images/galerija7.jpg')}}" alt="ZipKesa" class="gallery"/>
                    <img src="{{asset('/assets/img/images/galerija8.jpg')}}" alt="ZipKesa" class="gallery"/>
                    <img src="{{asset('/assets/img/images/galerija9.jpg')}}" alt="ZipKesa" class="gallery"/>
                    <img src="{{asset('/assets/img/images/galerija10.jpg')}}" alt="ZipKesa" class="gallery"/>
                    <img src="{{asset('/assets/img/images/galerija11.jpg')}}" alt="ZipKesa" class="gallery"/>
                    <img src="{{asset('/assets/img/images/galerija12.jpg')}}" alt="ZipKesa" class="gallery"/>
                    <img src="{{asset('/assets/img/images/galerija13.jpg')}}" alt="ZipKesa" class="gallery"/>
                    <img src="{{asset('/assets/img/images/galerija14.jpg')}}" alt="ZipKesa" class="gallery"/>
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
