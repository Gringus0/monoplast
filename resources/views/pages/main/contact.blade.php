@extends('layouts.layout')
@section('content')


  <main>
      <div class="col-12 order-2" id="textUnderNav">
        <div class="wrapper">
            <hr/>
                <h4 id="underNavigation">
                    Proizvodnja i štampa reklamnih razgradivih polietilenskih kesa i džakova
                </h4>
            <hr/>
        </div>
    </div>


    <div class="col-12 d-none d-md-block order-3 underImageBackGround">
        <div class="wrapper" id="aboutMainImage">
            <img src="{{asset('/assets/img/images/flash-slika-kontakt2.jpg')}}" class="d-block w-100" alt="Desktop slika" />
            <img src="{{asset('/assets/img/images/bcg-bla-galerija.jpg')}}" class="d-block w-100" alt="Desktop slika" />
        </div>
    </div>

    <div class="container-fluid">
        <div class="row wrapper">
            <div class="col-12 col-lg-3">
                <div id="sendEmailContact">
                    <p>Klikni ovde da bi proslao <span class="bold">e-mail</span></p>
                </div>
                <p class="contactLeftColMain">Monoplast d.o.o</p>
                <p class="underContactLeftColMain">Preduzeće za proizvodnju,<br/> trgovinu na veliko i malo,<br/>uvoz, izvoz i usluge</p>
                <p class="contactAdress">Adresa:</p>
                <p class="underContactLeftColMain">Pilota Zorana Latkovića 19, Nova pazova, 22330</p>
                <p class="contactAdress">telefon u prodizvodnji i prodaji je</p>
                <ul class="underContactLeftColMain productsList">
                    <li class="marginTop">+381 (22) 239 518</li>
                    <li>+381 (65) 336 11 11</li>
                </ul>
                <p class="contactAdress">Prodaja plastike široke potrošnje i najlonskih vrećica za Republiku Srpsku</p>
                <p class="underContactLeftColMain">Derventa "RS"</p>
                <p class="underContactLeftColMain">Tešandić Slobodan</p>
                <p class="underContactLeftColMain">+387 (65) 333-473</p>
            </div>
            <div class="col-12 col-lg-5">
                <div class="kontakt-forma">
                    <form action="" method="POST">
                        <div class="mb-3">
                        <label for="ime" class="form-label">VAŠE IME:<span class="important">*</span></label>
                        <input type="text" class="form-control" id="ime" required>
                        </div>
                        <div class="mb-3">
                        <label for="telefon" class="form-label">KONTAKT TELEFON:<span class="important">*</span></label>
                        <input type="text" class="form-control" id="telefon" required>
                        </div>
                        <div class="mb-3">
                        <label for="email" class="form-label">VAŠ E-MAIL:<span class="important">*</span></label>
                        <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                        <label for="poruka" class="form-label">TEKST PORUKE:<span class="important">*</span></label>
                        <textarea class="form-control" id="poruka" rows="7" required></textarea>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                        <small class="notice">Polja sa <span class="important">*</span> su obavezna da bi ste uspešno poslali poruku</small>
                        <button type="submit" class="btn btn-send">POŠALJI PORUKU</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-lg-4">

                <p class="bold">Važna dokumenta:</p>
                <ul class="productsList">
                    <a class="aTag" href=""><li class="importantDocumentsContact">Obrazac za Identifikaciju</li></a>
                    <a class="aTag" href=""><li class="importantDocumentsContact">PDV potvrda</li></a>
                    <a class="aTag" href=""><li class="importantDocumentsContact">PIB</li></a>
                    <a class="aTag" href=""><li class="importantDocumentsContact">Obaveštenje o Razvrstavanju</li></a>
                    <a class="aTag" href=""><li class="importantDocumentsContact">APR - Rešenje agencije za privredne registre</li></a>
                    <a class="aTag" href=""><li class="importantDocumentsContact">Sertifikat o razgradivosti </li></a>
                </ul>
                <p class="contactGoogleMapText">na google map je pogrešno obeležena ulica Vlastimira Kneževića umesto Mirka Tatalovića Ćire. Ispravan položaj ulica možete videti na mapi iznad.</p>
                <div style="border: 4px solid #fff;" class="w-100 marginTop">
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
                <p class="italicBlack marginTop marginBottom">Za sve detalje, uputstva oko pripreme za štampu, cene, tiraža i rokova izrade kesa, molimo Vas da se obratite našoj komercijalnoj službi, koristeći jedan od navedenih telefona, E-mail, ili pošaljite Fax.</p>
            </div>
        </div>
    </div>

  </main>
    
        

@endsection
