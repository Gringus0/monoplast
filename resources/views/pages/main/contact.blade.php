@extends('layouts.layout')
@section('keywords')

@endsection
@section('content')


  <main>
      <div class="col-12 order-2" id="textUnderNav">
        <div class="wrapper">
            <hr/>
                <h4 id="underNavigation">
                    {{__("messages.homepage_title")}}
                </h4>
            <hr/>
        </div>
    </div>


    <div class="col-12 d-none d-md-block order-3 underImageBackGround">
        <div class="wrapper" id="aboutMainImage">
            <img src="{{asset('/assets/img/images/flash-slika-kontakt2.jpg')}}" class="d-block w-100" alt="Lokacija monoplast firme na mapi" />
            <img src="{{asset('/assets/img/images/bcg-bla-galerija.jpg')}}" class="d-block w-100" alt="Linija" />
        </div>
    </div>

    <div class="container-fluid">
        <div class="row wrapper">
            <div class="col-12 col-lg-3">
                <div class="desnoBudi ">
                    <div id="sendEmailContact" >
                    <a href="mailto:monoplast.rs@gmail.com?" class="aTag colorWhite"><p>{!!__("messages.dugme_email")!!}</p></a>
                    </div>
                    <p class="contactLeftColMain">Monoplast d.o.o</p>
                    <p class="underContactLeftColMain">{!!__("messages.preduzece_za_proizvodnju")!!}</p>
                </div>
                <div class="levoBudi">
                    <p class="contactAdress">{!!__("messages.adresa")!!}</p>
                    <p class="underContactLeftColMain">{!!__("messages.adresa_ulica_mesto")!!}</p>
                    <p class="contactAdress">{!!__("messages.telefon")!!}</p>
                    <ul class="underContactLeftColMain productsList">
                        <li class="marginTop">{!!__("messages.telefon_u_proizvodnji1")!!}</li>
                        <li>{!!__("messages.telefon_u_proizvodnji2")!!}</li>
                    </ul>
                    <p class="contactAdress">{!!__("messages.adresa2")!!}</p>
                    <p class="underContactLeftColMain">{!!__("messages.adresa2_firma")!!}</p>
                    <p class="underContactLeftColMain">{!!__("messages.adresa2_ime")!!}</p>
                    <p class="underContactLeftColMain">{!!__("messages.adresa2_telefon")!!}</p>
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="kontakt-forma">
                    <form action="{{route('contact.mail')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="ime" class="form-label">{!!__("messages.vase_ime")!!}<span class="important">*</span></label>
                            <input type="text" class="form-control" id="ime" name="ime" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefon" class="form-label">{!!__("messages.kontakt_telefon")!!}<span class="important">*</span></label>
                            <input type="text" class="form-control" id="telefon" name="telefon" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">{!!__("messages.vas_email")!!}<span class="important">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="poruka" class="form-label">{!!__("messages.tekst_poruke")!!}<span class="important">*</span></label>
                            <textarea class="form-control" id="poruka" rows="7" name="text" required></textarea>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="notice">{!!__("messages.polja_su_obavezna")!!}</small>
                            <button type="submit" class="btn btn-send hoverButtonLoginReg" id="buttonSend">{!!__("messages.posalji_poruku")!!}</button>
                        </div>
                    </form>
                </div>
                <div>
                @if(session('success'))
                    {!! session('success') !!}
                @endif

                @if(session('error'))
                    {!! session('error') !!}
                @endif
                </div>
            </div>



            <div class="col-12 col-lg-4">
                <p class="bold">{!!__("messages.vazna_dokumenta")!!}</p>
                <ul class="productsList">
                    <a class="aTag" target="_blank" href="{{ asset('assets/files/Obrazac_za_identifikaciju.pdf') }}"><li class="importantDocumentsContact">{!!__("messages.obrazac_za_indetifikaciju")!!}</li></a>
                    <a class="aTag" target="_blank" href="{{ asset('assets/files/PDV_potvrada.pdf') }}"><li class="importantDocumentsContact">{!!__("messages.pdv_potvrda")!!}</li></a>
                    <a class="aTag" target="_blank" href="{{ asset('assets/files/PIB.pdf') }}"><li class="importantDocumentsContact">{!!__("messages.pib")!!}</li></a>
                    <a class="aTag" target="_blank" href="{{ asset('assets/files/Obavestenje_o_razvrstavanju.pdf') }}"><li class="importantDocumentsContact">{!!__("messages.obavestenje_o_razvrstavanju")!!}</li></a>
                    <a class="aTag" target="_blank" href="{{ asset('assets/files/APR_resenje_2010.pdf') }}"><li class="importantDocumentsContact">{!!__("messages.apr")!!}</li></a>
                    <a class="aTag" target="_blank" href="{{ asset('assets/files/Certifikat-d2w.pdf') }}"><li class="importantDocumentsContact">{!!__("messages.sertifikat_o_razgradivosti")!!}</li></a>
                </ul>
                <p class="contactGoogleMapText">{!!__("messages.google_tekst")!!}</p>
                <div id="map" class="w-100 marginTop">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.1968006076327!2d20.211091776980734!3d44.9566093710702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a59320e944091%3A0x8cafa5f1ad3a1190!2sMonoplast%20d.o.o.!5e0!3m2!1ssr!2srs!4v1748868442549!5m2!1ssr!2srs"
                        class="w-100 d-block"
                        height="290px"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
            <div class="col-12">
                <p class="italicBlack marginTop marginBottom">{!!__("messages.detalji_tekst")!!}</p>
            </div>
        </div>
    </div>

  </main>



@endsection
