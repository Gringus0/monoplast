@extends('layouts.layout')
@section('keywords')

@endsection
@section('content')

<main>

    <div class="col-12" id="textUnderNav">
        <div class="wrapper">
            <hr/>
                <h4 id="underNavigation">
                    Brzo i lako naručite vaše reklamne kese
                </h4>
            <hr/>
            <h4>
                @if(session('success'))
                    {{ session('success') }}
                @endif
                @if(session('error'))
                    {{ session('error') }}
                @endif
            </h4>
        </div>
    </div>

    <div class="underImageBackGround pt-2 pb-4">
        <div class="d-flex justify-content-between wrapper mb-4">
            <div>
                <form action="{{route('auth.logout')}}" method="post">
                @csrf
                    <button type="submit" class="logOut">Logout</button>
                </form>
            </div>
            <div class="textSmall">
                <p>Polja sa <span class="mailOrders">*</span> su obavezna</p>
            </div>
            <div class="textSmall">
                <p>Ulogovan korisnik: <span class="mailOrders">{{Auth::user()->mail}}</span></p>
            </div>
        </div>
        <form action="{{ route('order.store') }}" method="POST" class="row wrapper nesto" enctype="multipart/form-data">
            @csrf
            <div class="col-12 col-md-6  col-xl-custom-3 ps-0">
                <label for="banana_bez_ojacanja" class="LeftBlockinfo d-flex active" data-id="0">
                    <div class="malaKesa">
                        <div class="malaRucka"></div>
                    </div>
                    <p>Kese sa banana drškom bez bez ojačanja na dršci</p>
                </label>
                <input type="radio" name="tipKese" id="banana_bez_ojacanja" class="hidden-radio" value="banana_bez_ojacanja" checked>
                <label for="bez_ojacanja_s_faltom" class="LeftBlockinfo d-flex mt-2" data-id="1">
                    <div class="malaKesa">
                        <div class="malaRucka"></div>
                        <div class="koseLinijeMale"></div>
                    </div>
                    <p>Kesa bez ojačane banana drške sa faltom na dnu kese</p>
                </label>
                <input type="radio" name="tipKese" id="bez_ojacanja_s_faltom" class="hidden-radio" value="bez_ojacanja_s_faltom">
                <label for="sa_ojacanom_banana" class="LeftBlockinfo d-flex mt-2" data-id="2">
                    <div class="malaKesa">
                        <div class="okoRucke"></div>
                        <div class="malaRucka"></div>
                    </div>
                    <p>Kesa sa ojačanom banana drškom</p>
                </label>
                <input type="radio" name="tipKese" id="sa_ojacanom_banana" class="hidden-radio" value="sa_ojacanom_banana">
                <label for="sa_ojacanom_banana_s_faltom" class="LeftBlockinfo d-flex mt-2" data-id="3">
                    <div class="malaKesa">
                        <div class="okoRucke"></div>
                        <div class="malaRucka"></div>
                        <div class="koseLinijeMale"></div>
                    </div>
                    <p>Kesa sa ojačanom banana drškom i faltom na dnu kese</p>
                </label>
                <input type="radio" name="tipKese" id="sa_ojacanom_banana_s_faltom" class="hidden-radio" value="sa_ojacanom_banana_s_faltom">
                <label for="fleksibilna" class="LeftBlockinfo d-flex mt-2" data-id="4">
                    <div class="malaKesa mt-2" style="height: 35px">
                        <div class="bag-handleMale"></div>
                    </div>
                    <p>Kesa sa felksibilnom ručkom</p>
                </label>
                <input type="radio" name="tipKese" id="fleksibilna" class="hidden-radio" value="fleksibilna">
                <label for="fleksibilna_s_faltom" class="LeftBlockinfo d-flex mt-2" data-id="5">
                    <div class="malaKesa mt-2" style="height: 35px">
                        <div class="bag-handleMale"></div>
                        <div class="koseLinijeMale"></div>
                    </div>
                    <p>Kesa sa fleksibilnom ručkom i faltom na dnu kese</p>
                </label>
                <input type="radio" name="tipKese" id="fleksibilna_s_faltom" class="hidden-radio" value="fleksibilna_s_faltom">
            </div>
            <div class="col-12 col-md-6 col-xl-custom-4 orderBlocks" id="secondDiv">
                <h4 class="ordersSections"> IZBOR MATERIJALA *</h4>
                <div class="materijal-container marginRight15 marginTop">
                        <label for="LDPe" class="marginRight labelFont">glatke LDPe</label>
                        <input type="radio" name="materijal" value="LDPe" class="labelFont">
                        <label for="LDPe" class="marginRight labelFont">šuškave HDPe</label>
                        <input type="radio" name="materijal" value="HDPe">
                </div>
                <hr class="hrBasic"/>
                <h4 class="ordersSections"> IZBOR DIMENZIJA * <span class="underContactLeftColMain">(prvo izaberite visinu) </span></h4>
                <div class="d-flex justify-content-between">
                    <div>
                        <div class="kesa mt-5 kesa-boja banana_bez_ojacanja">
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
                        <div class="kesa mt-5 kesa-boja bez_ojacanja_s_faltom">
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
                        <div class="kesa mt-5 kesa-boja sa_ojacanom_banana">
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
                        <div class="kesa mt-5 kesa-boja sa_ojacanom_banana_s_faltom">
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
                        <div class="kesa mt-5 kesa-boja fleksibilna">
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
                        <div class="kesa mt-5 kesa-boja fleksibilna_s_faltom">
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
                    <div class="size-options mt-4 horizontalColumn" id="horizontalColumn">
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
                    <div class="size-options horizontalRow" style="margin-top: 60px" id="horizontalRow">
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
                    <h4 class="ordersSections"> IZBOR BOJE KESE * <span class="underContactLeftColMain">(prvo izaberite materijal) </span></h4>
                    <div class="color-options">

                    </div>
                    <h4 class="ordersSections mt-3 izborBojeRucke"> IZBOR BOJE RUČKE *</h4>
                    <div class="color-options izborBojeRucke bojeRucke">

                    </div>
                    <hr class="hrBasic"/>
                    <h4 class="ordersSections mt-3"> IZBOR VRSTE ŠTAMPE *</h4>
                    <select name="stampaTip" id="stampaTip" class="mt-2">
                        <option value="0">Izaberite vrstu</option>
                        <option value="1+0">1+0</option>
                        <option value="2+0">2+0</option>
                        <option value="3+0">3+0</option>
                        <option value="4+0">4+0</option>
                        <option value="5+0">5+0</option>
                        <option value="1+1">1+1</option>
                        <option value="2+1">2+1</option>
                        <option value="3+1">3+1</option>
                        <option value="4+1">4+1</option>
                        <option value="2+2">2+2</option>
                        <option value="3+2">3+2</option>
                        <option value="višs-od-5">više od 5</option>
                    </select>
                    <p class="bagTypeText"></p>
                    <hr class="hrBasic"/>
                    <h4 class="ordersSections mt-3"> KOLIČINA KESA *</h4>
                    <input type="text" id="kolicinaKese" name="kolicinaKese" placeholder="Unesite količinu kese" class="mt-3">
                    <p>minimalna količina 500 komada</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-custom-2 orderBlocks mt-2">
                <input type="file" id="uploadFile" name="image">
                <hr class="hrBasic"/>
                <h4 class="ordersSections mt-3"> DODATNE INFORMACIJE </h4>
                <textarea id="message" name="message" placeholder="Dodatne informacije..." rows="5" cols="40" class="mt-3 w-100 "></textarea>
                <label for="message" class="mt-2" >Možete ostaviti dodatne informacije o kesi <span class="redColor"><i class="fa-solid fa-arrow-up"></i></span></label><br>
                <button type="submit" class="submit-btn mt-5">POŠALJI ZAHTEV</button>
            </div>
        </form>
    </div>
        <div class="wrapper mb-4">
            <img src="{{asset('/assets/img/images/bcg-bla-galerija.jpg')}}" class="d-block w-100" alt="Linija" />
            <p class="ordersText2 mt-2">Nudimo Vam, blanko i štampane kese i džakove raznih boja i veličina. I to nije sve, zbog toga što se u našim kesama nose proizvodi različite težine, po Vašem zahtevu, sve kese možemo proizvesti sa ojačanim ili plastičnim ručkama. Naše kese se proizvode od najkvalitetnijih materijala, u raznim bojama a po Vašoj želji, na kesama vršimo štampu u jednoj ili više boja.</p>
            <hr class="hrBasic">
            <h5 class="ordersText1">Za sve detalje, uputstva oko pripreme za štampu, cene, tiraža i rokova izrade kesa, molimo Vas da se obratite našoj komercijalnoj službi, koristeći jedan od navedenih telefona, E-mail, ili pošaljite Fax.</h5>
        </div>
    </div>
</main>


@endsection
