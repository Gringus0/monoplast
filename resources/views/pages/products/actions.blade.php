@extends('layouts.layout')
@section('keywords')

@endsection

@section('content')

<main>
    <div class="wrapper">
        <hr/>
        <h4 id="underNavigation">Specijalne ponude i popusti <br/> Pogledajte naše akcije</h4>
        <hr/>
    </div>

<div class="main-content-wrapper">
    <div id="products" class="container-fluid">
      <div class="row wrapper gx-5">

        
        {{-- <div class="col-12 col-lg-4 mb-4 p-3">
            <div class="p-3 block borderProducts blockPolygon h-100 d-flex flex-column">
                
                <img src="{{asset('/assets/img/images/899276c_g5.jpg')}}" class="rounded-3 mx-auto d-block mb-3 actionImg" />
                <div class="d-flex flex-column justify-content-between flex-grow-1">
                <div>
                    <p class="mb-1 text-center actionTitle"><span class="bold">Kese sa ZIP Zatvaračem:</span></p>
                    <p class="actionAct"><span class="bold">Visina akcije: <span class="iconFooterContact">70%</span></p>
                    <p class="actionText" class="mt-1">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est numquam blanditiis...
                    </p>
                </div>

                <div class="d-flex justify-content-between mt-3 pt-3 border-top dateAction">
                    <p><span class="bold">Do:</span> 24.05.2010</p>
                    <p><span class="bold">Do:</span> 28.05.2010</p>
                </div>

                </div>
            </div>
        </div> --}}

        
{{-- 

        <div class="d-flex justify-content-center">
            <h3 class="colorAction p-4">Trenutno ne postoji nijedna akcije</h3>
        </div>  --}}


      </div>
    </div>
</div>

</main>


@endsection
