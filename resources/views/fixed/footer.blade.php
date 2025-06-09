<footer class="container-fluid" id="footerFluid">
    <div class="wrapper">
        <div class="row">
            <div class="col-12 col-xl-4 col-md-6" id="footerLogo">
                <img src="{{asset('/assets/img/monoplast-logo.png')}}" alt="Logo - Monoplast" class="logo logotfooter"/>
                <p class="mb-4">Radimo na najsavremenijim mašnama, koje obezbedjuju visok kvalitet finalnog priozvoda.</p>
                <a href="https://www.facebook.com/www.monoplast.rs/" target="_blank"><i class="fa-brands fa-facebook iconFooter"></i></a>
                <a href="https://www.instagram.com/monoplast.rs/" target="_blank"><i class="fa-brands fa-instagram iconFooter"></i></a>
                <a href="mailto:monoplast.rs@gmail.com?" target="_blank"><i class="fa-regular fa-envelope iconFooter"></i></a>
            </div>
            <div class="col-12 col-xl-3 col-md-6" id="footerContact">
                <h4 class="footerSubjects">KONTAKT</h4>
                <ul>
                    <li><p class="colorText"><span class="iconFooterContact"><i class="fa-solid fa-house-chimney marginRight icon"></span></i>Pilota Zorana Latkovica 19, Nova Pazova, 22330</p></li>
                    <li><p class="colorText"><span class="iconFooterContact"><i class="fa-solid fa-envelope marginRight icon"></span></i> monoplast.rs@gmail.com</p></li>
                    <li class="d-flex justify-content-start phoneIcon">
                        <p class="colorText"><span class="iconFooterContact"><i class="fa-solid fa-phone marginRight icon"></i></span>
                            <ul class="ulNone">
                                <li>+381 (22) 329 518</li>
                                <li>+381 (22) 329 523</li>
                                <li>+381 (65) 336 11 11</li>
                            </ul>
                        </p>   
                    </li>
                </ul>
            </div>
            <div class="col-12 col-xl-2 col-md-6" id="footerNav">
                <h4 class="footerSubjects">MONOPLAST</h4>
                <ul id="navFooterList">
                    <a href="{{route('home')}}" class="hoverTextOrange"><li class="mb-1">Home</li></a>
                    <a href="{{route('about')}}" class="hoverTextOrange"><li>O nama</li></a>
                    <a href="{{route('gallery')}}" class="hoverTextOrange"><li class="mb-1 mt-1">Proizvodi</li></a>
                    <a href="{{route('productPrices')}}" class="hoverTextOrange"><li>Cenovnik</li></a>
                    <a href="{{route('contact')}}" class="hoverTextOrange"><li class="mb-1 mt-1">Kontakt</li></a>
                    <a href="{{route('registerAndLoginForm')}}" class="hoverTextOrange"><li>Porucite</li></a>
                </ul>
            </div>
            <div class="col-12 col-xl-3 col-md-6" id="footerGallery">
                <h4 class="footerSubjects text-center">GALERIJA</h4>
                <div> 
                    <div class="row p-2">
                        <div class="col-4 p-0 text-center">
                            <a href="{{route('gallery')}}"><img class="border imgFooter" src="{{asset('/assets/img/images/galerija10.jpg')}}" alt="P.E. folija - zaštitna folija za pakovanje i transport"/></a>
                        </div>
                        <div class="col-4 p-0 text-center">
                            <a href="{{route('gallery')}}"><img class="border imgFooter" src="{{asset('/assets/img/images/galerija2.jpg')}}" alt="Trake za označavanje - trake za identifikaciju i označavanje pakovanja"/></a>
                        </div>
                        <div class="col-4 p-0 text-center">
                            <a href="{{route('gallery')}}"><img class="border imgFooter" src="{{asset('/assets/img/images/galerija8.jpg')}}" alt="Air bubble folija - zaštitna folija sa vazdušnim mehurićima za pakovanje"/></a>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-4 p-0 text-center">
                            <a href="{{route('gallery')}}"><img class="border imgFooter" src="{{asset('/assets/img/images/galerija7.jpg')}}" alt="OPS ambalaža - plastika za pakovanje sa visokom transparentnošću"/></a>
                        </div>
                        <div class="col-4 p-0 text-center">
                            <a href="{{route('gallery')}}"><img class="border imgFooter" src="{{asset('/assets/img/images/galerija1.jpg')}}" alt="Reklamne kese - kese za promociju brenda i proizvoda"/></a>
                        </div>
                        <div class="col-4 p-0 text-center">
                            <a href="{{route('gallery')}}"><img class="border imgFooter" src="{{asset('/assets/img/images/galerija6.jpg')}}" alt="Tregerice - zaštitne trake za pakovanje i fiksiranje proizvoda"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </footer>
<div id="underfooter" class="container-fluid">
    <div class="wrapper text-center">
        <p>Copyright <span class="textOrange">&copy; </span>2025. All rights reserved.</p>
    </div>
</div>