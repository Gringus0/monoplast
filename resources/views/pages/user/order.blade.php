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

    <div class="row wrapper nesto">
        <div class="col-12 col-md-6  col-xl-custom-3 ps-0">
            <div class="LeftBlockinfo d-flex active" data-id="0">
                <div class="malaKesa">
                    <div class="malaRucka"></div>
                </div>
                <p>Kese sa banana drškom bez bez ojačanja na dršci</p>
            </div>
            <div class="LeftBlockinfo d-flex mt-2" data-id="1">
                <div class="malaKesa">
                    <div class="malaRucka"></div>
                    <div class="koseLinijeMale"></div>
                </div>
                <p>Kesa bez ojačane banana drške sa faltom na dnu kese</p>
            </div>
            <div class="LeftBlockinfo d-flex mt-2" data-id="2">
                <div class="malaKesa">
                    <div class="okoRucke"></div>
                    <div class="malaRucka"></div>
                </div>
                <p>Kesa sa ojačanom banana drškom</p>
            </div>
            <div class="LeftBlockinfo d-flex mt-2" data-id="3">
                <div class="malaKesa">
                    <div class="okoRucke"></div>
                    <div class="malaRucka"></div>
                    <div class="koseLinijeMale"></div>
                </div>
                <p>Kesa sa ojačanom banana drškom i faltom na dnu kese</p>
            </div>
            <div class="LeftBlockinfo d-flex mt-2" data-id="4">
                <div class="malaKesa mt-2" style="height: 35px">
                    <div class="bag-handleMale"></div>
                </div>
                <p>Kesa sa felksibilnom ručkom</p>
            </div>
            <div class="LeftBlockinfo d-flex mt-2" data-id="5">
                <div class="malaKesa mt-2" style="height: 35px">
                    <div class="bag-handleMale"></div>
                    <div class="koseLinijeMale"></div>
                </div>
                <p>Kesa sa fleksibilnom ručkom i faltom na dnu kese</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-custom-4 orderBlocks" id="secondDiv">
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
            <div class="d-flex justify-content-between">
                <div>
                    <div class="kesa mt-4">
                        <div class="rucka"></div>
                        <div class="dim-line vert">
                            <div class="dim-cap top"></div>
                            <div class="dim-bar"></div>
                            <div class="dim-cap bottom"></div>
                            <div class="dim-label vert-label">Visina</div>
                        </div>
                        <div class="dim-line horiz">
                            <div class="dim-cap left"></div>
                            <div class="dim-bar"></div>
                            <div class="dim-cap right"></div>
                            <div class="dim-label horiz-label">Širina</div>
                        </div>
                    </div>
                    <div class="kesa mt-4">
                        <div class="rucka"></div>
                        <div class="koseLinijeVelike"></div>
                        <div class="dim-line vert">
                            <div class="dim-cap top"></div>
                            <div class="dim-bar"></div>
                            <div class="dim-cap bottom"></div>
                            <div class="dim-label vert-label">Visina</div>
                        </div>
                        <div class="dim-line horiz">
                            <div class="dim-cap left"></div>
                            <div class="dim-bar"></div>
                            <div class="dim-cap right"></div>
                            <div class="dim-label horiz-label">Širina</div>
                        </div>
                    </div>
                    <div class="kesa mt-4">
                        <div class="okoRucke"></div>
                        <div class="rucka"></div>
                        <div class="dim-line vert">
                            <div class="dim-cap top"></div>
                            <div class="dim-bar"></div>
                            <div class="dim-cap bottom"></div>
                            <div class="dim-label vert-label">Visina</div>
                        </div>
                        <div class="dim-line horiz">
                            <div class="dim-cap left"></div>
                            <div class="dim-bar"></div>
                            <div class="dim-cap right"></div>
                            <div class="dim-label horiz-label">Širina</div>
                        </div>
                    </div>
                    <div class="kesa mt-4">
                        <div class="okoRucke"></div>
                        <div class="rucka"></div>
                        <div class="koseLinijeVelike"></div>
                        <div class="dim-line vert">
                            <div class="dim-cap top"></div>
                            <div class="dim-bar"></div>
                            <div class="dim-cap bottom"></div>
                            <div class="dim-label vert-label">Visina</div>
                        </div>
                        <div class="dim-line horiz">
                            <div class="dim-cap left"></div>
                            <div class="dim-bar"></div>
                            <div class="dim-cap right"></div>
                            <div class="dim-label horiz-label">Širina</div>
                        </div>
                    </div>
                    <div class="kesa mt-4">
                        <div class="bag-handleVelika"></div>
                        <div class="dim-line vert">
                            <div class="dim-cap top"></div>
                            <div class="dim-bar"></div>
                            <div class="dim-cap bottom"></div>
                            <div class="dim-label vert-label">Visina</div>
                        </div>
                        <div class="dim-line horiz">
                            <div class="dim-cap left"></div>
                            <div class="dim-bar"></div>
                            <div class="dim-cap right"></div>
                            <div class="dim-label horiz-label">Širina</div>
                        </div>
                    </div>
                    <div class="kesa mt-4">
                        <div class="bag-handleVelika"></div>
                        <div class="koseLinijeVelike"></div>
                        <div class="dim-line vert">
                            <div class="dim-cap top"></div>
                            <div class="dim-bar"></div>
                            <div class="dim-cap bottom"></div>
                            <div class="dim-label vert-label">Visina</div>
                        </div>
                        <div class="dim-line horiz">
                            <div class="dim-cap left"></div>
                            <div class="dim-bar"></div>
                            <div class="dim-cap right"></div>
                            <div class="dim-label horiz-label">Širina</div>
                        </div>
                    </div>
                </div>
                <div class="size-options mt-4 horizontalColumn">
                    <input type="radio" id="size25" name="size" value="25" checked>
                    <label for="size25">25</label>

                    <input type="radio" id="size30" name="size" value="30">
                    <label for="size30">30</label>

                    <input type="radio" id="size35" name="size" value="35">
                    <label for="size35">35</label>

                    <input type="radio" id="size45" name="size" value="45">
                    <label for="size45">45</label>

                    <input type="radio" id="size50" name="size" value="50">
                    <label for="size50">50</label>
                </div>
            </div>
            <div>
                <div class="size-options horizontalRow" style="margin-top: 60px">
                    <input type="radio" id="width20" name="width" value="20" checked>
                    <label for="width20">20</label>

                    <input type="radio" id="width25" name="width" value="25">
                    <label for="width25">25</label>

                    <input type="radio" id="width30" name="width" value="30">
                    <label for="width30">30</label>

                    <input type="radio" id="width35" name="width" value="35">
                    <label for="width35">35</label>

                    <input type="radio" id="width40" name="width" value="40">
                    <label for="width40">40</label>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-custom-3 orderBlocks mt-2">
            <div>
                <h4 class="ordersSections"> IZBOR BOJE KESE *</h4>
                <div class="color-options">
                    <input type="radio" id="colorWhite" name="color" value="white" checked>
                    <label for="colorWhite" class="color-box white"></label>

                    <input type="radio" id="colorBlack" name="color" value="black">
                    <label for="colorBlack" class="color-box black"></label>

                    <input type="radio" id="colorYellow" name="color" value="yellow">
                    <label for="colorYellow" class="color-box yellow"></label>

                    <input type="radio" id="colorRed" name="color" value="red">
                    <label for="colorRed" class="color-box red"></label>

                    <input type="radio" id="colorGreen" name="color" value="green">
                    <label for="colorGreen" class="color-box green"></label>
                </div>
                <h4 class="ordersSections mt-3"> IZBOR BOJE RUČKE *</h4>
                <div class="color-options">
                    <input type="radio" id="handleWhite" name="handleColor" value="white" checked>
                    <label for="handleWhite" class="color-box white"></label>

                    <input type="radio" id="handleBlack" name="handleColor" value="black">
                    <label for="handleBlack" class="color-box black"></label>

                    <input type="radio" id="handleYellow" name="handleColor" value="yellow">
                    <label for="handleYellow" class="color-box yellow"></label>

                    <input type="radio" id="handleRed" name="handleColor" value="red">
                    <label for="handleRed" class="color-box red"></label>

                    <input type="radio" id="handleGreen" name="handleColor" value="green">
                    <label for="handleGreen" class="color-box green"></label>
                </div>
                <hr class="hrBasic"/>
                <h4 class="ordersSections mt-3"> IZBOR VRSTE ŠTAMPE *</h4>
                <select name="ŠtampaTip" id="ŠtampaTip" class="mt-2">
                    <option value="">1+0</option>
                    <option value="">2+0</option>
                    <option value="">3+0</option>
                    <option value="">4+0</option>
                    <option value="">5+0</option>
                    <option value="">1+1</option>
                    <option value="">2+1</option>
                    <option value="">3+1</option>
                    <option value="">4+1</option>
                    <option value="">2+2</option>
                    <option value="">3+2</option>
                    <option value="">više od 5</option>
                </select>
                <p>štampa 1 boje na jednoj strani kese</p>
                <hr class="hrBasic"/>
                <h4 class="ordersSections mt-3"> KOLIČINA KESE *</h4>
                <input type="text" id="kolicinaKese" name="kolicinaKese" placeholder="Unesite količinu kese" class="mt-3">
                <p>minimalna količina 500 komada</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-custom-2 orderBlocks mt-2">
            <input type="file" id="uploadFile" name="uploadFile">
            <hr class="hrBasic"/>
            <h4 class="ordersSections mt-3"> DODATNE INFORMACIJE </h4>
            <textarea id="message" name="message" placeholder="Dodatne informacije..." rows="5" cols="40" class="mt-3 w-100 "></textarea>
            <label for="message" class="mt-2" >Možete ostaviti dodatne informacije o kesi <span class="redColor"><i class="fa-solid fa-arrow-up"></i></span></label><br>
            <button type="submit" class="submit-btn mt-5">POŠALJI ZAHTEV</button>
        </div>
    </div>
</main>
<div class="col-12 wrapper">
    <form action="{{route('auth.logout')}}" method="post">
    @csrf
    <button type="submit">Logout</button>
</form>
</div>

@endsection
