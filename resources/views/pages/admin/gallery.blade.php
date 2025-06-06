@extends('layouts.admin')
@section('content')
Galerija

<form action="{{ route('admin.gallery.store') }}" method="POST" class="col-4 m-5" enctype="multipart/form-data">
    @csrf
    <div class="input-group">
        <input type="file" class="form-control" name="image">
        <select name="galleryId" id="galleryId">
            <option value="1">Reklamne kese</option>
            <option value="2">Trake za označavanje</option>
            <option value="3">Džakovi</option>
            <option value="4">Streč folija</option>
            <option value="5">ZIP kese</option>
            <option value="6">Tregerice</option>
            <option value="7">OPS ambalaža</option>
            <option value="8">Air Bubble folija</option>
            <option value="9">PET ambalaža</option>
            <option value="10">P.E. folije</option>
            <option value="11">Plast. široke potrošnje</option>
            <option value="12">Kese za zamrzivač</option>
            <option value="13">Slike iz proizvodnje</option>
            <option value="14">Sajmovi</option>
        </select>
    </div>
    <textarea name="description" id="description" cols="30" rows="10"></textarea>
    <button class="input-group-text">Upload</button>
</form>
@if(session('success'))
    {{ session('success') }}
@endif
@if(session('error'))
    {{ session('error') }}
@endif
<div class="container-fluid">
    <div class="row wrapper">
        <div class="col-12">
            <div class="blockGallery">
                <div class="d-flex justify-content-between marginTop marginBottom">
                    <a href="{{ route('admin.gallery', ['category' => 'reklamneKese']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija1.jpg')}}" alt="ZipKesa" class="gallery"/>
                        <div class="overlay-text">Reklamne kese</div>
                    </a>
                    <a href="{{ route('admin.gallery', ['category' => 'trakeZaOznacavanje']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija2.jpg')}}" alt="ZipKesa" class="gallery"/>
                        <div class="overlay-text">Trake za <br/>označavanje</div>
                    </a>
                    <a href="{{ route('admin.gallery', ['category' => 'dzakovi']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija3.jpg')}}" alt="ZipKesa" class="gallery"/>
                        <div class="overlay-text">Džakovi</div>
                    </a>
                    <a href="{{ route('admin.gallery', ['category' => 'strecFolija']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija4.jpg')}}" alt="ZipKesa" class="gallery"/>
                        <div class="overlay-text">Streč folija</div>
                    </a>
                    <a href="{{ route('admin.gallery', ['category' => 'zipKese']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija5.jpg')}}" alt="ZipKesa" class="gallery"/>
                        <div class="overlay-text">ZIP kese</div>
                    </a>
                    <a href="{{ route('admin.gallery', ['category' => 'tregerice']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija6.jpg')}}" alt="ZipKesa" class="gallery"/>
                        <div class="overlay-text">Tregerice</div>
                    </a>
                    <a href="{{ route('admin.gallery', ['category' => 'opsAmbalaza']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija7.jpg')}}" alt="ZipKesa" class="gallery"/>
                        <div class="overlay-text">OPS ambalaža</div>
                    </a>
                </div>
                <div class="d-flex justify-content-between marginTop marginBottom">
                    <a href="{{ route('admin.gallery', ['category' => 'airBubbleFolija']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija8.jpg')}}" alt="ZipKesa" class="gallery"/>
                        <div class="overlay-text">Air Bubble<br/> folija</div>
                    </a>
                    <a href="{{ route('admin.gallery', ['category' => 'petAmbalaza']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija9.jpg')}}" alt="ZipKesa" class="gallery"/>
                        <div class="overlay-text">PET ambalaža</div>
                    </a>
                    <a href="{{ route('admin.gallery', ['category' => 'peFolija']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija10.jpg')}}" alt="ZipKesa" class="gallery"/>
                        <div class="overlay-text">P.E. Folije</div>
                    </a>
                    <a href="{{ route('admin.gallery', ['category' => 'plastSirokePotrosnje']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija11.jpg')}}" alt="ZipKesa" class="gallery"/>
                        <div class="overlay-text">Plast. široke <br/>potrošnje</div>
                    </a>
                    <a href="{{ route('admin.gallery', ['category' => 'keseZaZamrzivac']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija12.jpg')}}" alt="ZipKesa" class="gallery"/>
                        <div class="overlay-text">Kese za <br/>zamrzivač</div>
                    </a>
                    <a href="{{ route('admin.gallery', ['category' => 'slikeIzProizvodnje']) }}" class="gallery-item">
                        <img src="{{asset('/assets/img/images/galerija13.jpg')}}" alt="ZipKesa" class="gallery"/>
                        <div class="overlay-text">Slike iz <br/>proizvodnje</div>
                    </a>
                    <a href="{{ route('admin.gallery', ['category' => 'sajmovi']) }}" class="gallery-item">
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
@endsection
