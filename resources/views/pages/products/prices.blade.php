@extends('layouts.layout')
@section('content')

<main>

    <div class="col-12 order-2" id="textUnderNav">
        <div class="wrapper">
            <hr/>
                <h4 id="underNavigation">
                    Proizvodnja i štampa reklamnih razgradivih polietilenskih kesa i džakova. U cenama je sadržana i cena kese i cena štampe tako da su cene u cenovniku za gotove odštampane kese.
                </h4>
                <button id="scrollBtn" class="scroll-down-btn"><i class="fa-solid fa-arrow-down"></i></button>
            <hr/>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row wrapper">
            <div class="col-12 col-lg-8" id="tabeleCene">
                <div class="pdf-page-break">
                    <div class="d-flex justify-content-between">
                        <h5 class="pricesTopImgText">
                            Butik kese sa banana ručkom 
                            <span class="textOrange">bez ojačanja</span><br/>
                            na ručki:
                        </h5>
                        <img src="{{asset('/assets/img/images/kesa-cenovnik1.png')}}" alt="Butik kese sa banana ručkom bez ojačanja na ručki"/>
                    </div>

                    <div class="table-scroll-412">
                        <table class="w-100">
                            <thead>
                                <tr>
                                    <th class="firstRow"></th>
                                    <th>Dimenzije <br/>kese</th>
                                    <th>jedna boja <br/> 1/0</th>
                                    <th>dve boje <br/> 2/0 ili 1/1</th>
                                    <th>tri boje <br/> 3/0 ili 2/1</th>
                                    <th>četiri boje <br/> 4/0 ili 2/2 <br/> ili 3/1</th>
                                    <th>pet boja <br/> 5/0 ili 2/3 <br/> ili 4/1</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bananaBezOjacanja as $index => $kesa)
                                    @php
                                        if ($index < 2) {
                                            $rowClass = 'bg1';
                                        } elseif ($index < 5) {
                                            $rowClass = 'bg2';
                                        } elseif ($index < 11) {
                                            $rowClass = 'bg3';
                                        } else {
                                            $rowClass = 'bg4';
                                        }

                                        if ($index === 0) {
                                            $borderClass = 'border-group-1'; 
                                        } elseif ($index >= 1 && $index <= 3) {
                                            $borderClass = 'border-group-2'; 
                                        } elseif ($index >= 4 && $index <= 9) {
                                            $borderClass = 'border-group-3'; 
                                        } else {
                                            $borderClass = 'border-group-4'; 
                                        }
                                    @endphp

                                    <tr class="{{ $rowClass }} {{ $borderClass }}">
                                        <td></td>
                                        <td class="firstCol">{{$kesa->velicina}}</td>
                                        <td>{{$kesa->boja1}}</td>
                                        <td>{{$kesa->boja2}}</td>
                                        <td>{{$kesa->boja3}}</td>
                                        <td>{{$kesa->boja4}}</td>
                                        <td>{{$kesa->boja5}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="pdf-page-break">
                    <div class="d-flex justify-content-between marginTop">
                        <h5 class="pricesTopImgText">Butik kese<span class="textOrange"> sa ojačanom</span> banana ručkom <br/> <span class="textOrange"> ili fleksibilnom </span>ručkom:</h5>
                        <div>
                            <img src="{{asset('/assets/img/images/kesa-cenovnik2.png')}}" alt="Butik kese sa ojačanom banana ručkom ili fleksibilnom ručkom"/>
                        </div>
                    </div>
                    <div class="table-scroll-412">
                        <table class="w-100">
                        <thead>
                            <tr>
                                <th class="firstRow"></th>
                                <th>Dimenzije <br/>kese</th>
                                <th>jedna boja <br/> 1/0</th>
                                <th>dve boje <br/> 2/0 ili 1/1</th>
                                <th>tri boje <br/> 3/0 ili 2/1</th>
                                <th>četiri boje <br/> 4/0 ili 2/2 <br/> ili 3/1</th>
                                <th>pet boja <br/> 5/0 ili 2/3 <br/> ili 4/1</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($bananaOjacanaIliFleksibilna as $index => $kesa)
                            @php
                        
                                if ($index < 2) {
                                    $rowClass = 'bg1';
                                } elseif ($index < 5) {
                                    $rowClass = 'bg2';
                                } elseif ($index < 11) {
                                    $rowClass = 'bg3';
                                } else {
                                    $rowClass = 'bg4';
                                }

                                if ($index === 0) {
                                    $borderClass = 'border-group-1'; 
                                } elseif ($index >= 1 && $index <= 3) {
                                    $borderClass = 'border-group-2'; 
                                } elseif ($index >= 4 && $index <= 9) {
                                    $borderClass = 'border-group-3'; 
                                } else {
                                    $borderClass = 'border-group-4'; 
                                }
                            @endphp

                            <tr class="{{ $rowClass }} {{ $borderClass }}">
                                <td></td>
                                <td class="firstCol">{{$kesa->velicina}}</td>
                                <td>{{$kesa->boja1}}</td>
                                <td>{{$kesa->boja2}}</td>
                                <td>{{$kesa->boja3}}</td>
                                <td>{{$kesa->boja4}}</td>
                                <td>{{$kesa->boja5}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    </div>
                    
                </div>
                <div class="pdf-page-break">
                    <div class="d-flex justify-content-between marginTop">
                        <h5 class="pricesTopImgText">Butik kese<span class="textOrange"> sa ojačanom</span> banana ručkom <br/> <span class="textOrange"> ili fleksibilnom </span>ručkom <span class="textOrange">i faltom</span> na dnu kese <br/><span class="pricesSpanGray">(kese se na dnu širi):</span></h5>
                        <div>
                            <img src="{{asset('/assets/img/images/kesa-cenovnik3.png')}}" alt="Butik kese sa ojačanom banana ručkom ili fleksibilnom ručkom i faltom na dnu kese "/>
                        </div>
                    </div>
                    <div class="table-scroll-412">
                        <table class="w-100">
                        <thead>
                            <tr>
                                <th class="firstRow"></th>
                                <th>Dimenzije <br/>kese</th>
                                <th>jedna boja <br/> 1/0</th>
                                <th>dve boje <br/> 2/0 ili 1/1</th>
                                <th>tri boje <br/> 3/0 ili 2/1</th>
                                <th>četiri boje <br/> 4/0 ili 2/2 <br/> ili 3/1</th>
                                <th>pet boja <br/> 5/0 ili 2/3 <br/> ili 4/1</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($bananaOjacanaIliFleksibilnaIFalt as $index => $kesa)
                            @php
                        
                                if ($index < 2) {
                                    $rowClass = 'bg1';
                                } elseif ($index < 5) {
                                    $rowClass = 'bg2';
                                } elseif ($index < 11) {
                                    $rowClass = 'bg3';
                                } else {
                                    $rowClass = 'bg4';
                                }

                                if ($index === 0) {
                                    $borderClass = 'border-group-1'; 
                                } elseif ($index >= 1 && $index <= 3) {
                                    $borderClass = 'border-group-2'; 
                                } elseif ($index >= 4 && $index <= 9) {
                                    $borderClass = 'border-group-3'; 
                                } else {
                                    $borderClass = 'border-group-4'; 
                                }
                            @endphp

                            <tr class="{{ $rowClass }} {{ $borderClass }}">
                                <td></td>
                                <td class="firstCol">{{$kesa->velicina}}</td>
                                <td>{{$kesa->boja1}}</td>
                                <td>{{$kesa->boja2}}</td>
                                <td>{{$kesa->boja3}}</td>
                                <td>{{$kesa->boja4}}</td>
                                <td>{{$kesa->boja5}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    </div>
                </div>
                <div class="pdf-page-break">
                    <div class="d-flex justify-content-between marginTop">
                        <h5 class="pricesTopImgText">Butik kese sa banana ručkom <span class="textOrange">bez ojačanja</span><br/>na ručki <span class="textOrange"> i faltom</span> na dnu kese<br/><span class="pricesSpanGray">(kese se na dnu širi):</span></h5>
                        <div>
                            <img src="{{asset('/assets/img/images/kesa-cenovnik4.png')}}" alt="Butik kese sa banana ručkom bez ojačanja na ručki i faltom na dnu kese"/>
                        </div>
                    </div>
                    <div class="table-scroll-412">
                        <table class="w-100">
                        <thead>
                            <tr>
                                <th class="firstRow"></th>
                                <th>Dimenzije <br/>kese</th>
                                <th>jedna boja <br/> 1/0</th>
                                <th>dve boje <br/> 2/0 ili 1/1</th>
                                <th>tri boje <br/> 3/0 ili 2/1</th>
                                <th>četiri boje <br/> 4/0 ili 2/2 <br/> ili 3/1</th>
                                <th>pet boja <br/> 5/0 ili 2/3 <br/> ili 4/1</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($bananaBezOjacanjaIFalt as $index => $kesa)
                            @php
                        
                                if ($index < 2) {
                                    $rowClass = 'bg1';
                                } elseif ($index < 5) {
                                    $rowClass = 'bg2';
                                } elseif ($index < 11) {
                                    $rowClass = 'bg3';
                                } else {
                                    $rowClass = 'bg4';
                                }

                                if ($index === 0) {
                                    $borderClass = 'border-group-1'; 
                                } elseif ($index >= 1 && $index <= 3) {
                                    $borderClass = 'border-group-2'; 
                                } elseif ($index >= 4 && $index <= 9) {
                                    $borderClass = 'border-group-3'; 
                                } else {
                                    $borderClass = 'border-group-4'; 
                                }
                            @endphp

                            <tr class="{{ $rowClass }} {{ $borderClass }}">
                                <td></td>
                                <td class="firstCol">{{$kesa->velicina}}</td>
                                <td>{{$kesa->boja1}}</td>
                                <td>{{$kesa->boja2}}</td>
                                <td>{{$kesa->boja3}}</td>
                                <td>{{$kesa->boja4}}</td>
                                <td>{{$kesa->boja5}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    </div>
                </div>
                <div >
                    <div class="d-flex justify-content-between marginTop">
                        <h5 class="pricesTopImgText">Butik kese <span class="textOrange">bez ojačane </span>ručke<br/><span class="pricesSpanGray">(za cenu kese sa ojačanom ručkom dodajte + 7 RSD):</span></h5>
                        <div>
                            <img src="{{asset('/assets/img/images/kesa-cenovnik5.png')}}" alt="Butik kese bez ojačane ručke"/>
                        </div>
                    </div>
                    <div class="table-scroll-412">
                        <table class="w-100">
                        <thead>
                            <tr>
                                <th class="firstRow"></th>
                                <th>Dimenzije <br/>kese</th>
                                <th></th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($blankoBezOjacanja as $index => $kesa)
                            @php
                        
                                if ($index < 2) {
                                    $rowClass = 'bg1';
                                } elseif ($index < 5) {
                                    $rowClass = 'bg2';
                                } elseif ($index < 11) {
                                    $rowClass = 'bg3';
                                } else {
                                    $rowClass = 'bg4';
                                }

                                if ($index === 0) {
                                    $borderClass = 'border-group-1'; 
                                } elseif ($index >= 1 && $index <= 3) {
                                    $borderClass = 'border-group-2'; 
                                } elseif ($index >= 4 && $index <= 9) {
                                    $borderClass = 'border-group-3'; 
                                } else {
                                    $borderClass = 'border-group-4'; 
                                }
                            @endphp

                            <tr class="{{ $rowClass }} {{ $borderClass }}">
                                <td></td>
                                <td class="firstCol">{{$kesa->velicina}}</td>
                                <td>{{$kesa->boja1}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    </div>
                </div>
                <div>
                    <div class="d-flex justify-content-between marginTop">
                        <h5 class="pricesTopImgText">Blanko kese sa ojačanom drškom <span class="textOrange">i faltom </span>na<br/>dnu kese <span class="pricesSpanGray">(kesa se na dnu širi):</span></h5>
                        <div>
                            <img src="{{asset('/assets/img/images/kesa-cenovnik6.png')}}" alt="Blanko kese sa ojačanom drškom i faltom na dnu kese"/>
                        </div>
                    </div>
                    <div class="table-scroll-412">
                        <table class="w-100">
                        <thead>
                            <tr>
                                <th class="firstRow"></th>
                                <th>Dimenzije <br/>kese</th>
                                <th></th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($blankoOjacanaIFalt as $index => $kesa)
                            @php
                        
                                if ($index < 2) {
                                    $rowClass = 'bg1';
                                } elseif ($index < 5) {
                                    $rowClass = 'bg2';
                                } elseif ($index < 11) {
                                    $rowClass = 'bg3';
                                } else {
                                    $rowClass = 'bg4';
                                }

                                if ($index === 0) {
                                    $borderClass = 'border-group-1'; 
                                } elseif ($index >= 1 && $index <= 3) {
                                    $borderClass = 'border-group-2'; 
                                } elseif ($index >= 4 && $index <= 9) {
                                    $borderClass = 'border-group-3'; 
                                } else {
                                    $borderClass = 'border-group-4'; 
                                }
                            @endphp

                            <tr class="{{ $rowClass }} {{ $borderClass }}">
                                <td></td>
                                <td class="firstCol">{{$kesa->velicina}}</td>
                                <td>{{$kesa->boja1}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4" id="rightBlockPrices">
                <div>
                    <button class="w-100 buttonPrices" id="buttonPricesPDF">Odštampaj cenovnik</button>
                        <a class="{{ request()->routeIs('order.index') ? 'active' : '' }}" href="{{ route('registerAndLoginForm') }}">
                    <button class="w-100 buttonPrices marginTop">Poručite kese</button>
                    </a>
                    <hr class="linePrices" />
                    <p class="italicBlack">Molimo vas da pažljivo pročitate napomene o poslovanju</p>
                    <ul class="productsList ulPrices">
                        <li>Minimalna količina koju možete da naručite je <span class="bold">500 kesa</span> po svakoj dimenziji i izgledu štampe.</li>
                        <li>Rok isporuke: 5 - 7 dana, od dana kada je ugovorena (potvrđena) priprema za štampu.</li>
                        <li>Na veće količine (preko 5000 komada) odobravamo popust 10%.</li>
                        <li>U mogućnosti smo da uradimo kese po vašim dimenzijama, i željenoj boji, kod adekvatnih tiraža.</li>
                        <li>Hitni poslovi, ukoliko remete redosled poslovanja, realizuju se uz povećanje cene po dogovoru.</li>
                        <li>Kod specijalnih priprema, kupac snosi troškove pripreme.</li>
                        <li>Boja štampe je po izboru kupca, u mogućnosti smo da radimo ojačanje svih kesa, folijom, a cena je 7 dinara po kesi.</li>
                        <li>Kod većih količina cene su po dogovoru.</li>
                        <li>+ 20 % PDV (porez na dodatu vrednost)</li>
                    </ul>
                    <hr class="linePrices" />
                    <img src="{{asset('/assets/img/images/sjajne-C.jpg')}}" class="w-100" alt="Rolne obojenih plastičnih folija spremnih za obradu - 13 boja"/>
                    <ul class="productsList ulPricess">
                        <li>Glatke i sjajne LDPE: </li>
                        <li>*dubina kesa (250 ) mm <br/>srebrna, bela, žuta, crvena</li>
                        <li>*dubina kesa (300) mm<br/> srebrna, bela, žuta, crvena, crna, ljubičasta, plava</li>
                        <li>*dubina kesa (350) mm<br/> srebrna, bela, žuta, crvena, crna, ljubičasta, plava, zelena, narandžasta, bebi roze, bež</li>
                        <li>*dubina kesa (450) i (500) mm<br/> srebrna, bela, žuta, crvena, crna, ljubičasta, plava, zelena, narandžasta, bež</li>
                        <li>*dubina kesa (500) mm sa donjom faltom<br/> srebrna, bela, žuta, crna</li>
                        <li>*dubina kesa (600) mm sa donjom faltom<br/> srebrna, bela, žuta, crna, bež</li>
                    </ul>
                    <img src="{{asset('/assets/img/images/suskave-C.jpg')}}" class="w-100" alt="Rolne obojenih plastičnih folija spremnih za obradu - 7 boja"/>
                    <ul class="productsList ulPricess">
                        <li>Šuškave i mat HDPE:</li>
                        <li>*dubina kesa (250) mm <br/>srebrna, bela, žuta</li>
                        <li>*dubina kesa (300) mm <br/>srebrna, bela, žuta, providna (boja leda), plava</li>
                        <li>*dubina kesa (350) mm <br/>srebrna, bela, žuta, plava, providna (boja leda)</li>
                        <li>*dubina kesa (450) i (500) mm <br/>srebrna, bela, žuta, plava, providna (boja leda)</li>
                        <li>*dubina kesa (500) mm sa donjom faltom <br/>srebrna, bela, žuta, providna (boja leda)</li>
                        <li>*dubina kesa (600) mm sa donjom faltom <br/>srebrna, bela, žuta, providna (boja leda)</li>
                    </ul>
                    <img src="{{asset('/assets/img/images/boje-flex-rucki.jpg')}}" class="w-100" alt="Rolne obojenih plastičnih folija spremnih za obradu - 9 boja"/>
                    <p class="ulPricess marginTop marginBottom">Boje fleksibilnih ručkicrvena, crna, tamno zelena, bela, narandžasta, tamno plava, srebrna, žuta </p>
                    <img src="{{asset('/assets/img/images/objasnjenje-dimenzija-kesa.jpg')}}" class="w-100" alt="Tehnička objašnjenja razlika u vrsti ručke na kesama"/>
                    <img src="{{asset('/assets/img/images/Folja-Crevo-i-Polucrevo.jpg')}}" class="w-100" alt="Tehnička objašnjenja razlika između folije u crevu i polu-crevu"/>
                </div>
            </div>
            <div class="col-12 marginTop">
                <h5 class="italicBlack">Za sve detalje, uputstva oko pripreme za štampu, cene, tiraža i rokova izrade kesa, molimo Vas da se obratite našoj komercijalnoj službi, koristeći jedan od navedenih telefona, E-mail, ili pošaljite Fax.</h5>
            </div>
        </div>

    </div>
    

</main>
@endsection
