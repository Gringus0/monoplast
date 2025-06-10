@extends('layouts.admin')
@section('content')

<div class="p-4 col-12">
    <h2 class="d-flex justify-content-center p-4 titleAdmin">DODAVANJE I BRISANJE SLIKA</h2>
    <form action="{{ route('admin.gallery.store') }}" method="POST" class="col-4 m-5" enctype="multipart/form-data">
        @csrf
        <div class="input-group">
            <div class="d-flex">
                <label for="vrsta" class="labelAdmin">Izaberite sliku:</label>
                <input type="file" id="vrsta" name="image">
            </div>
            <div class="d-flex mt-4 mb-4">
                <label for="galleryId" class="labelAdmin">Izaberite tip:</label>
                <select name="galleryId" id="galleryId" class="bg-light rounded inputAdmin">
                    <option value="0">Tip</option>
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
        </div>
        <label for="opis" class="form-label textArea">Opis slike</label>
        <textarea class="form-control focusAdmin" id="opis" rows="7" name="description" required></textarea>

        <div class="d-flex justify-content-end mt-3">
            <button type="submit" class="btn btn-dark">Dodaj</button>
        </div>
    </form>

    @if(session('success'))
        <div class="alert alert-success m-3 text-center">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger m-3 text-center">
            {{ session('error') }}
        </div>
    @endif

       <div class="blockGallery">
        <div class="gallery-filters gap-2">
            <a href="{{ route('admin.gallery', ['category' => 'reklamneKese']) }}" class="gallery-item">
                <img src="{{asset('/assets/img/images/galerija1.jpg')}}" alt="Reklamne kese" class="gallery"/>
                <div class="overlay-text">Reklamne kese</div>
            </a>
            <a href="{{ route('admin.gallery', ['category' => 'trakeZaOznacavanje']) }}" class="gallery-item">
                <img src="{{asset('/assets/img/images/galerija2.jpg')}}" alt="Trake za označavanje" class="gallery"/>
                <div class="overlay-text">Trake za <br/>označavanje</div>
            </a>
            <a href="{{ route('admin.gallery', ['category' => 'dzakovi']) }}" class="gallery-item">
                <img src="{{asset('/assets/img/images/galerija3.jpg')}}" alt="Džakovi" class="gallery"/>
                <div class="overlay-text">Džakovi</div>
            </a>
            <a href="{{ route('admin.gallery', ['category' => 'strecFolija']) }}" class="gallery-item">
                <img src="{{asset('/assets/img/images/galerija4.jpg')}}" alt="Streč folija" class="gallery"/>
                <div class="overlay-text">Streč folija</div>
            </a>
            <a href="{{ route('admin.gallery', ['category' => 'zipKese']) }}" class="gallery-item">
                <img src="{{asset('/assets/img/images/galerija5.jpg')}}" alt="ZIP kese" class="gallery"/>
                <div class="overlay-text">ZIP kese</div>
            </a>
            <a href="{{ route('admin.gallery', ['category' => 'tregerice']) }}" class="gallery-item">
                <img src="{{asset('/assets/img/images/galerija6.jpg')}}" alt="Tregerice" class="gallery"/>
                <div class="overlay-text">Tregerice</div>
            </a>
            <a href="{{ route('admin.gallery', ['category' => 'opsAmbalaza']) }}" class="gallery-item">
                <img src="{{asset('/assets/img/images/galerija7.jpg')}}" alt="OPS ambalaža" class="gallery"/>
                <div class="overlay-text">OPS ambalaža</div>
            </a>
            <a href="{{ route('admin.gallery', ['category' => 'airBubbleFolija']) }}" class="gallery-item">
                <img src="{{asset('/assets/img/images/galerija8.jpg')}}" alt="Air Bubble folija" class="gallery"/>
                <div class="overlay-text">Air Bubble<br/> folija</div>
            </a>
            <a href="{{ route('admin.gallery', ['category' => 'petAmbalaza']) }}" class="gallery-item">
                <img src="{{asset('/assets/img/images/galerija9.jpg')}}" alt="PET ambalaža" class="gallery"/>
                <div class="overlay-text">PET ambalaža</div>
            </a>
            <a href="{{ route('admin.gallery', ['category' => 'peFolija']) }}" class="gallery-item">
                <img src="{{asset('/assets/img/images/galerija10.jpg')}}" alt="P.E. Folije" class="gallery"/>
                <div class="overlay-text">P.E. Folije</div>
            </a>
            <a href="{{ route('admin.gallery', ['category' => 'plastSirokePotrosnje']) }}" class="gallery-item">
                <img src="{{asset('/assets/img/images/galerija11.jpg')}}" alt="Plast. široke potrošnje" class="gallery"/>
                <div class="overlay-text">Plast. široke <br/>potrošnje</div>
            </a>
            <a href="{{ route('admin.gallery', ['category' => 'keseZaZamrzivac']) }}" class="gallery-item">
                <img src="{{asset('/assets/img/images/galerija12.jpg')}}" alt="Kese za zamrzivač" class="gallery"/>
                <div class="overlay-text">Kese za <br/>zamrzivač</div>
            </a>
            <a href="{{ route('admin.gallery', ['category' => 'slikeIzProizvodnje']) }}" class="gallery-item">
                <img src="{{asset('/assets/img/images/galerija13.jpg')}}" alt="Slike iz proizvodnje monoplast" class="gallery"/>
                <div class="overlay-text">Slike iz <br/>proizvodnje</div>
            </a>
            <a href="{{ route('admin.gallery', ['category' => 'sajmovi']) }}" class="gallery-item">
                <img src="{{asset('/assets/img/images/galerija14.jpg')}}" alt="Slike sa sajmova" class="gallery"/>
                <div class="overlay-text">Sajmovi</div>
            </a>
        </div>
    </div>
    
    <hr class="hrBasic"/>

    @if(isset($data))
        <div>
            <div class="row">
                @foreach($data as $kesa)
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                        <img src="{{ asset('/assets/img/images/galerija/' . $kesa->velikaslika) }}"
                            class="galleryImages img-fluid"
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


    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body text-center underImageBackGround">
                    <img id="modalImage" src="" class="img-fluid" alt="Slika">
                    <div id="modalDesc" class="mt-3 text-muted"></div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
