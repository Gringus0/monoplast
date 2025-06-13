@extends('layouts.layout')
@section('keywords')

@endsection

@section('bodyClass')
    page-wrapper
@endsection

@section('content')

<main>
    <div class="wrapper">
        <hr/>
        <h4 id="underNavigation">Specijalne ponude i popusti <br/> Pogledajte naše akcije</h4>
        <hr/>
    </div>
{{--@dd($actions)--}}
<div class="main-content-wrapper">
    <div id="products" class="container-fluid">
        <div class="row wrapper gx-5">
        @foreach($actions as $action)
                <div class="col-12 col-lg-4 mb-4 p-3">
                    <div class="p-3 block borderProducts blockPolygon h-100 d-flex flex-column">

                        <img src="{{asset('/assets/img/images/akcije/' . $action->slika2)}}" class="rounded-3 mx-auto d-block mb-3 actionImg" alt="{{ $action->slika2 }}" />
                        <div class="d-flex flex-column justify-content-between flex-grow-1">
                            <div>
                                <p class="mb-1 text-center actionTitle"><span class="bold">{{ $action->naslov }}</span></p>
                                <p class="actionAct"><span class="bold">Visina akcije: <span class="iconFooterContact">{{ $action->visina_akcije }}</span></span></p>
                                <p class="actionText" class="mt-1">
                                    {{ $action->tekst }}
                                </p>
                            </div>

                            <div class="d-flex justify-content-between mt-3 pt-3 border-top dateAction">
                                <p><span class="bold">Od:</span> {{ $action->akcija_od }}</p>
                                <p><span class="bold">Do:</span> {{ $action->akcija_do }}</p>
                            </div>

                        </div>
                    </div>
                </div>
        @endforeach

{{--            @dd($actions)--}}
        @if($actions->isEmpty())
            <div class="d-flex justify-content-center">
                <h3 class="colorAction p-4">Trenutno ne postoji nijedna akcije</h3>
            </div>
        @endif

      </div>
    </div>
</div>

</main>


@endsection
