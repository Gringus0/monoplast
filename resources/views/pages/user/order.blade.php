@extends('layouts.layout')
@section('content')

<main>

    <div class="col-12" id="textUnderNav">
        <div class="wrapper">
            <hr/>
                <h4 id="underNavigation">
                    Brzo i lako naručite vaše reklamne kese
                </h4>
            <hr/>
        </div>
    </div>

    <div class="row wrapper">
        <div class="col-12 col-lg-4">
            <img src="{{asset('/assets/img/images/rollover/kese1a.jpg')}}" alt="kesa bez ojacane banana drške sa faltom na dnu kese" class="kesa-slika "/>
            <img src="{{asset('/assets/img/images/rollover/kese2a.jpg')}}" alt="kesa bez ojacane banana drške sa faltom na dnu kese" class="mb-2 mt-2 "/>
            <img src="{{asset('/assets/img/images/rollover/kese3a.jpg')}}" alt="kesa bez ojacane banana drške sa faltom na dnu kese" class=""/>
            <img src="{{asset('/assets/img/images/rollover/kese4a.jpg')}}" alt="kesa bez ojacane banana drške sa faltom na dnu kese" class="mb-2 mt-2 "/>
            <img src="{{asset('/assets/img/images/rollover/kese5a.jpg')}}" alt="kesa bez ojacane banana drške sa faltom na dnu kese" class=""/>
            <img src="{{asset('/assets/img/images/rollover/kese6a.jpg')}}" alt="kesa bez ojacane banana drške sa faltom na dnu kese" class="mt-2 "/>
        </div>
        <div class="col-12 col-lg-4" id="ChooseMat">
            <h4 class="ordersSections"> IZBOR MATERIJALA *</h4>
            <form>
                <label class="marginRight15 marginTop">
                    <label for="LDPe" class="marginRight labelFont">glatke LDPe</label>
                    <input type="radio" name="materijal" value="LDPe" class="labelFont" checked>
                </label>

                <label>
                    <label for="LDPe" class="marginRight labelFont">šuškave HDPe</label>
                    <input type="radio" name="materijal" value="HDPe">
                </label>
            </form>
            <hr class="hrBasic"/>
            <h4 class="ordersSections"> IZBOR DIMENZIJA * <span class="underContactLeftColMain">(prvo izaberite visinu) </span></h4>
            <div class="kesa mt-3">
                <div class="rucka">

                </div>
            </div>
        </div>
        <div class="col-12 col-lg-2"></div>
        <div class="col-12 col-lg-2"></div>
    </div>
</main>

<div class="col-12 wrapper">
    <form action="{{route('auth.logout')}}" method="post">
    @csrf
    <button type="submit">Logout</button>
</form>
</div>

@endsection
