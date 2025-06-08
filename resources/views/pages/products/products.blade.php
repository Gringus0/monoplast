@extends('layouts.layout')
@section('content')

    <main>
        <div class="row flex-column d-flex d-md-block marginZero">
        <div class="col-12 d-md-none order-1 paddingZero" id="imagesPhone">
            <img src="{{asset('/assets/img/images/flash/02_Homepage-mob_V1.jpg')}}" class="d-block w-100" alt="Mobilna slika" />
        </div>

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
                <img src="{{asset('/assets/img/images/flash/monoplast-slide2.jpg')}}" class="d-block w-100" alt="Desktop slika" />

            </div>
        </div>
    </div>


    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 borderBottomProducts">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-4">
                        <img src="{{asset('/assets/img/images/prozvodSlika1.jpg')}}" alt="ZipKesa" class="productsImages mx-auto d-block w-100 aboutImages"/>
                    </div>
                        <div class="col-12 col-lg-8 products-product textColorProducts">
                            <h5>Reklamne kese</h5>
                            <div>
                                <p>
                                    Teško je zamisliti univerzalniji proizvod od kese. Kesa ili džak, u zavisnosti od dimenzija, sreće se svuda i na svakom mestu.
                                    Uvek kada je potrebno nešto poneti, preneti, zapakovati, prepakovati, kupiti, prodati. Zbog toga je kesa idealna pokretna reklama,
                                    koja će u rukama zadovoljnog kupca, proći kroz grad, ponekad i više puta i na taj način reklamirati vašu firmu ili proizvod.
                                </p>
                            </div>
                            <i class="marginTop fa-solid fa-circle circleProducts"></i> 
                            <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">Pogledaj galeriju</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 borderBottomProducts">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-4">
                        <img src="{{asset('/assets/img/images/trake-za-kros.jpg')}}" alt="ZipKesa" class="productsImages mx-auto d-block w-100 aboutImages"/>
                        </div>
                        <div class="col-12 col-lg-8 products-product textColorProducts">
                            <h5>Trake za označavanje</h5>
                            <div>
                                <p>
                                    Proizvodimo višenamenske trake za označavanje koje se koriste za označavanje staza kod sportskih manifestacija, kod postavljanja strujnih ili telefonskih kablova i slično...
                                    Trake mogu da budu sa stampom ili bez stampe.
                                </p>
                            </div>
                            <i class="marginTop fa-solid fa-circle circleProducts"></i> 
                            <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">Pogledaj galeriju</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 borderBottomProducts">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-4">
                        <img src="{{asset('/assets/img/images/dzakovi.jpg')}}" alt="ZipKesa" class="productsImages mx-auto d-block w-100 aboutImages"/>
                        </div>
                        <div class="col-12 col-lg-8 products-product textColorProducts">
                            <h5>Džakovi</h5>
                            <div>
                                <p>
                                    Dzakovi raznih veličina, debljina i dimenzija, za pakovanje raznih proizvoda.
                                    Džakovi za smeće.
                                    Džakovi za pakovanje specijalne namene.
                                    U mogućnosti smo da proizvedemo džakove prema vašim specifikacijama (dimenziji debljini i boji).
                                </p>
                            </div>
                            <i class="marginTop fa-solid fa-circle circleProducts"></i> 
                            <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">Pogledaj galeriju</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 borderBottomProducts">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-4">
                        <img src="{{asset('/assets/img/images/strec-folija.jpg')}}" alt="ZipKesa" class="productsImages mx-auto d-block w-100 aboutImages"/>
                        </div>
                        <div class="col-12 col-lg-8 products-product textColorProducts">
                            <h5>Streč folije</h5>
                            <div>
                                <p>
                                    Streč folija napravljena je da zadovolji najrazličitije potrebe, bilo da se radi o snazi, zaštiti, pouzdanosti ili ekonomičnosti. Danas je to najčešće korišćena folija za pakovanje proizvoda prilikom transporta.
                                    Osnovne karakteristike naše streč folije su veliko istezanje, visoka providnost, otpornost na oštećenja i ekonomska isplativost. Streč folija se prvenstveno koristi za obavijanje paleta, čime se sprečava padanje proizvoda, kao i finalni sloj zaštite oko osetljivog predmeta da bi se dobila kompaktnost predhodnih slojeva zaštite bilo da je to pucketava folija ili stiropor i sl. ujedno ih štiteći od vlage i prljanja.
                                </p>
                                <ul class="productsLi">
                                    <li>Širina rolne: 50 cm.</li>
                                    <li>Dužina: min 300 m.</li>
                                    <li>Debljina: 25my.</li>
                                    <li>Težina: 5 kg.</li>
                                </ul>
                            </div>
                            <i class="marginTop fa-solid fa-circle circleProducts"></i> 
                            <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">Pogledaj galeriju</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 borderBottomProducts">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-4">
                        <img src="{{asset('/assets/img/images/zip-kese.jpg')}}" alt="ZipKesa" class="productsImages mx-auto d-block w-100 aboutImages"/>
                        </div>
                        <div class="col-12 col-lg-8 products-product textColorProducts">
                            <h5>Zip kese</h5>
                            <div>
                                <p>
                                    Razne veličine zip kesa pogodnih za brzo pakovanje robe gdje je potrebno više puta otvoriti ili zatvoriti istu kesu.
                                    Pored običnih ZIP kesa sa jednim Zip zatvaračem (mono zipp lock) poceli smo da proizvodimo i ZIP kese sa duplim Zip Zatvaračem (double Zipp lock) i zip kese sa patent Zip zatvaračem (zipp bags with Slider) te kese su i vodo ne propusne. Usvojili smo novu tehnologiju pa moze da radimo i štampane zip kese i zip kese sa običnom rupom, euro rupom i bana ručkom kao sto mozete da vidite u galeriji slika zipp kesa.
                                </p>
                            </div>
                            <i class="marginTop fa-solid fa-circle circleProducts"></i> 
                            <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">Pogledaj galeriju</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 borderBottomProducts">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-4">
                        <img src="{{asset('/assets/img/images/tregerice.jpg')}}" alt="ZipKesa" class="productsImages mx-auto d-block w-100 aboutImages"/>
                        </div>
                        <div class="col-12 col-lg-8 products-product textColorProducts">
                            <h5>Treger kese</h5>
                            <div>
                                <p>
                                    Treger kese koje proizvodimo su razgradive , a imaju širu primenu za jeftinije pakovanje i transport raznih artikala. 
                                </p>
                            </div>
                            <i class="marginTop fa-solid fa-circle circleProducts"></i> 
                            <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">Pogledaj galeriju</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 borderBottomProducts">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-4">
                        <img src="{{asset('/assets/img/images/ops-ambalaza.jpg')}}" alt="ZipKesa" class="productsImages mx-auto d-block w-100 aboutImages"/>
                        </div>
                        <div class="col-12 col-lg-8 products-product textColorProducts">
                            <h5>OPS ambalaža</h5>
                            <div>
                                <p>
                                    OPS ambalaža izrađuje se od poliesternih folija gde prilikom postupka termičke obrade dobija svoj krajnji oblik. Kristalna čistoća, žilavost, čvrstoća, sjajna površina i transparentnost je ono što karakteriše OPS program.Najčešće se koristi za kolače i torte, a odlikuje se viskim sjajem, tvrdoćom i temperaturnim područjem primene od -40°C do +80°C.Pogodna je za korištenje u hladnjačama, kao i za pakovanje vrele/vruće hrane.Veliki izbor modela koji se nalazi u ponudi OPS programa nudi široko polje primene.(poslastičarstvo, pekarstvo, mesna industrija, mlečni proizvodi,pakovanje voća i povrća, catering, pakovanje konzumnih i prepeličjih jaja kao i u kućnoj primeni, za odlaganje svih vrsta namirnica u frižidere i zamrzivače. Koristi se i za pakovanje određenih industrijskih proizvoda. U našoj ponudi možete pronaći širok izbor posuda izrađenih od OPS-a.
                                </p>
                            </div>
                            <i class="marginTop fa-solid fa-circle circleProducts"></i> 
                            <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">Pogledaj galeriju</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 borderBottomProducts">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-4">
                        <img src="{{asset('/assets/img/images/air-bubble.jpg')}}" alt="ZipKesa" class="productsImages mx-auto d-block w-100 aboutImages"/>
                        </div>
                        <div class="col-12 col-lg-8 products-product textColorProducts textColorProducts">
                            <h5>Vazdušasta - Air Bubble folija</h5>
                            <div>
                                <p>
                                    Air Bubble folija - Alternativni nazivi su: Folija sa vazdušnim mehurićima, Vazdušna folija, Pucketava folija, kao i Puc Puc folija. Ova folija je do sada neprevazidjena što se tiče pakovanja lomljivih i stvari osetljivih na udarce, ispadanje i sl.
                                </p>
                                <ul class="productsLi">
                                    <li >Karakteristike: </li>
                                    <li>Mala težina: </li>
                                    <li>Vodonepropustljivost: </li>
                                    <li>Lako oblikovanje oko proizvoda: </li>
                                    <li>Velika žilavost i otpornost na kidanje: </li>
                                    <li>Dobra toplotna postojanost: </li>
                                    <li>Mogućnost laminacije s drugim materijalima (najčešće s papirom) </li>
                                    <li>Ekološka prihvatljivost</li>
                                    <li>Namena u drvnoj i staklarskoj industriji, transportu, te u ostalim delatnostima:</li>
                                    <li>Zaštita osetljivih proizvoda od mehaničkih oštećenja (npr. nameštaja, stakla, keramike, aparata...)</li>
                                </ul>
                            </div>
                            <i class="marginTop fa-solid fa-circle circleProducts"></i> 
                            <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">Pogledaj galeriju</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 borderBottomProducts">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-4">
                        <img src="{{asset('/assets/img/images/pp-ambalaza.jpg')}}" alt="ZipKesa" class="productsImages mx-auto d-block w-100 aboutImages"/>
                        </div>
                        <div class="col-12 col-lg-8 products-product textColorProducts textColorProducts">
                            <h5>Pet ambalaža</h5>
                            <div>
                                <p>PET ambalaža, ili ambalaža od polietilen teraftalata, zapravo je ambalaža od termoplastičnog polimer granulata koji pripada porodici poliestera. Ovaj materijal je primenu našao u proizvodnji veštačkih vlakana. Naročito se počeo koristiti u industriji pakovanja hrane i pića, a ima temperaturno područje primene do 60°C. </p>
                                <p>Danas PET ambalažu možemo videti na svakom koraku, a u našoj ponudi ambalaže od PET-a možete pronaći širok izbor posuda za pakovanje hrane sa poklopcem.</p>
                                <p>Izdržljive, kompaktne, lagane i jednostavnog dizajna. Pravljena od PET materijala koji je izuzetno izdržljiv na razne transportne i temperaturne uslove i najvaznije odobren od svetskih zdravstvenih ustanova kao "sigurna ambalaža". Svoju upotrebu najvise pronalazi u skladištenju i čuvanju meda, kremova, čokolanih proizvoda, sušenih začina, poslastica i dodataka jelima. Za razliku od staklenog proizvoda, laka je za transport i sigurna za hranu. </p>
                            </div>
                            <i class="marginTop fa-solid fa-circle circleProducts"></i> 
                            <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">Pogledaj galeriju</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 borderBottomProducts">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-4">
                        <img src="{{asset('/assets/img/images/stiropor-ambalaza.jpg')}}" alt="ZipKesa" class="productsImages mx-auto d-block w-100 aboutImages"/>
                        </div>
                        <div class="col-12 col-lg-8 products-product textColorProducts textColorProducts">
                            <h5>Poli-etilenske Folije , Creva i Polu-Creva</h5>
                            <div>
                                <p>Proizvodimo polietilenske folije, Creva i Polu-Creva za razne namene: za građevinarstvo, u industriji, za kućne potreba, folije za pakovanje, oblaganje i slično. Folija se proizvodi od Polietilena koja moze biti providna ili po vasoj želji obojena u neku boju. Novi materijali i tehnologija izrade garantuju visok kvalitet proizvoda.Folije mogu da budu proizvedene od Glatkog i sjajnog polietilena niske gustine LDPE i šuškavog i mat polietilena visoke gustine HDPE.</p>
                            </div>
                            <i class="marginTop fa-solid fa-circle circleProducts"></i> 
                            <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">Pogledaj galeriju</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 borderBottomProducts">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-4">
                        <img src="{{asset('/assets/img/images/plastika-siroke-potrosnje.jpg')}}" alt="ZipKesa" class="productsImages mx-auto d-block w-100 aboutImages"/>
                        </div>
                        <div class="col-12 col-lg-8 products-product textColorProducts textColorProducts">
                            <h5>Plastika široke potrošnje</h5>
                            <div>
                                <p>
                                    Visok kvalitet proizvoda i bogata ponuda čine nas prepoznatljivim na tržištu plastike široke potrošnje.
                                </p>
                            </div>
                            <i class="marginTop fa-solid fa-circle circleProducts"></i> 
                            <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">Pogledaj galeriju</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 borderBottomProducts">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-4">
                        <img src="{{asset('/assets/img/images/kese-za-zamrzivac.jpg')}}" alt="ZipKesa" class="productsImages mx-auto d-block w-100 aboutImages"/>
                        </div>
                        <div class="col-12 col-lg-8 products-product textColorProducts textColorProducts">
                            <h5>Kese za zamrzivač</h5>
                            <div>
                                <p>
                                    Najčešće se koriste za pakovanje prehrambenih proizvoda u frižidere i zamrzivače, ali i za industrijske potrebe , šrafovske i druge proizvode koji zahtevaju jeftinu izdržljivu i providnu ambalažu kao i za pakovanje robe siroke potrosnje manjih dimenzija. Proizvodimo ih od Polietilenskog granulata i mogu biti HDPE-a ( šuškave ) i LDP-a ( glatke ) .
                                </p>
                            </div>
                            <i class="marginTop fa-solid fa-circle circleProducts"></i> 
                            <a class="moreGallery colorGalleryMoreProducts" href="{{route('gallery')}}">Pogledaj galeriju</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>



@endsection
