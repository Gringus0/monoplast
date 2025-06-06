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
        <div class="col-12 col-lg-3">
            <div class="LeftBlockinfo d-flex">
                <div class="malaKesa">
                    <div class="malaRucka"></div>
                </div>
                <p>Kese sa banana drškom bez bez ojačanja na dršci</p>
            </div>
            <div class="LeftBlockinfo d-flex mt-2">
                <div class="malaKesa">
                    <div class="malaRucka"></div>
                    <div class="koseLinijeMale"></div>
                </div>
                <p>Kesa bez ojačane banana drške sa faltom na dnu kese</p>
            </div>
              <div class="LeftBlockinfo d-flex mt-2">
                <div class="malaKesa">
                    <div class="malaRucka"></div>
                    <div class="koseLinijeMale"></div>
                </div>
                <p>Kesa sa ojačanom banana drškom</p>
            </div>
            <div class="LeftBlockinfo d-flex mt-2">
                <div class="malaKesa">
                    <div class="okoRucke"></div>
                    <div class="malaRucka"></div>
                    <div class="koseLinijeMale"></div>
                </div>
                <p>Kesa sa ojačanom banana drškom i faltom na dnu kese</p>
            </div>
            <div class="LeftBlockinfo d-flex mt-2">
                <div class="malaKesa mt-2" style="height: 35px">
                    <div class="bag-handleMale"></div>       
                </div>
                <p>Kesa sa felksibilnom ručkom</p>
            </div>
            <div class="LeftBlockinfo d-flex mt-2">
                <div class="malaKesa mt-2" style="height: 35px">
                    <div class="bag-handleMale"></div>  
                    <div class="koseLinijeMale"></div>     
                </div>
                <p>Kesa sa fleksibilnom ručkom i faltom na dnu kese</p>
            </div>
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
        <div class="col-12 col-lg-3"></div>
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
