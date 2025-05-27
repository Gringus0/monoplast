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
            <div class="col-8">
                <div class="d-flex justify-content-between">
                    <h5 class="pricesTopImgText">Butik kese sa banana ručkom <span class="textOrange">bez ojačanja</span><br/>na ručki:</h5>
                    <img src="{{asset('/assets/img/images/kesa-cenovnik1.png')}}" alt="ZipKesa"/>
                </div>
                <table class="w-100">
                    <thead>
                        <tr>
                            <th>Dimenzije kese</th>
                            <th>Jedna boja <br/> 1/0</th>
                            <th>dve boje <br/> 2/0 ili 1/1</th>
                            <th>tri boje <br/> 3/0 ili 2/1</th>
                            <th>četiri boje <br/> 4/0 ili 2/2 <br/> ili 3/1</th>
                            <th>pet boja <br/> 5/0 ili 2/3 <br/> ili 4/1</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bananaBezOjacanja as $kesa)
                        <tr>
                            <td>{{$kesa->velicina}}</td>
                            <td>{{$kesa->boja1}}</td>
                            <td>{{$kesa->boja2}}</td>
                            <td>{{$kesa->boja3}}</td>
                            <td>{{$kesa->boja4}}</td>
                            <td>{{$kesa->boja5}}</td>
                            <td>{{$kesa->boja6}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-4">

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
