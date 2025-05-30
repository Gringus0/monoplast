@extends('layouts.layout')
@section('content')

<main>

    <div class="col-12 order-2" id="textUnderNav">
        <div class="wrapper">
            <hr/>
                <h4 id="underNavigation">
                    Proizvodnja i štampa reklamnih razgradivih polietilenskih kesa i džakova. U cenama je sadržana i cena kese i cena štampe tako da su cene u cenovniku za gotove odštampane kese.
                </h4>
            <hr/>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row wrapper">
            <div class="col-12 col-lg-8">
                <div>
                    <div class="d-flex justify-content-between">
                        <h5 class="pricesTopImgText">
                            Butik kese sa banana ručkom 
                            <span class="textOrange">bez ojačanja</span><br/>
                            na ručki:
                        </h5>
                        <img src="{{asset('/assets/img/images/kesa-cenovnik1.png')}}" alt="ZipKesa"/>
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

                <div>
                    <div class="d-flex justify-content-between marginTop">
                        <h5 class="pricesTopImgText">Butik kese<span class="textOrange"> sa ojačanom</span> banana ručkom <br/> <span class="textOrange"> ili fleksibilnom </span>ručkom:</h5>
                        <div>
                            <img src="{{asset('/assets/img/images/kesa-cenovnik2.png')}}" alt="ZipKesa"/>
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
                <div>
                    <div class="d-flex justify-content-between marginTop">
                        <h5 class="pricesTopImgText">Butik kese<span class="textOrange"> sa ojačanom</span> banana ručkom <br/> <span class="textOrange"> ili fleksibilnom </span>ručkom <span class="textOrange">i faltom</span> na dnu kese <br/><span class="pricesSpanGray">(kese se na dnu širi):</span></h5>
                        <div>
                            <img src="{{asset('/assets/img/images/kesa-cenovnik3.png')}}" alt="ZipKesa"/>
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
                <div>
                    <div class="d-flex justify-content-between marginTop">
                        <h5 class="pricesTopImgText">Butik kese sa banana ručkom <span class="textOrange">bez ojačanja</span><br/>na ručki <span class="textOrange"> i faltom</span> na dnu kese<br/><span class="pricesSpanGray">(kese se na dnu širi):</span></h5>
                        <div>
                            <img src="{{asset('/assets/img/images/kesa-cenovnik4.png')}}" alt="ZipKesa"/>
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
            </div>
            <div class="col-4">
                <div>

                </div>
            </div>
        </div>
    </div>
    

</main>

Prices Page
{{--    @dd($bananaBezOjacanja)--}}
{{--    @dd($bananaOjacanaIliFleksibiln~~~a)--}}
{{--    @dd($bananaOjacanaIliFleksibilnaIFalt)--}}
{{--    @dd($bananaBezOjacanjaIFalt)--}}
{{--    @dd($blankoBezOjacanja)--}}
{{--    @dd($blankoOjacanaIFalt)--}}

{{--    @foreach($bananaBezOjacanja as $kesa)--}}
{{--        <br>{{$kesa->boja3}}--}}
{{--    @endforeach--}}
@endsection
