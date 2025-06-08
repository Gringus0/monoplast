window.onload = function(){
    var path = window.location.pathname.split("/").pop();


    if(path === "orders"){
           //     Modal js
        const orderModal = document.getElementById('orderModal');
        orderModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;

            const id = button.getAttribute('data-id');
            const ime = button.getAttribute('data-ime');
            const firma = button.getAttribute('data-firma');
            const telefon = button.getAttribute('data-telefon');
            const mail = button.getAttribute('data-mail');
            const datum = button.getAttribute('data-datum');
            const tipKese= button.getAttribute('data-tipKese');
            const materijal = button.getAttribute('data-materijal');
            const sirina = button.getAttribute('data-sirina');
            const visina = button.getAttribute('data-visina');
            const bojaRucke = button.getAttribute('data-bojaRucke');
            const bojaKese = button.getAttribute('data-bojaKese');
            const priprema = button.getAttribute('data-priprema');
            const stampa = button.getAttribute('data-stampa');
            const kolicina = button.getAttribute('data-kolicina');

            document.getElementById('modal-order-id').textContent = id;
            document.getElementById('modal-order-ime').textContent = ime;
            document.getElementById('modal-order-firma').textContent = firma;
            document.getElementById('modal-order-telefon').textContent = telefon;
            document.getElementById('modal-order-mail').textContent = mail;
            document.getElementById('modal-order-datum').textContent = datum;
            document.getElementById('modal-order-tipKese').textContent = tipKese;
            document.getElementById('modal-order-materijal').textContent = materijal;
            document.getElementById('modal-order-sirina').textContent = sirina;
            document.getElementById('modal-order-visina').textContent = visina;
            document.getElementById('modal-order-bojaRucke').textContent = bojaRucke;
            document.getElementById('modal-order-bojaKese').textContent = bojaKese;
            document.getElementById('modal-order-priprema').textContent = priprema;
            document.getElementById('modal-order-stampa').textContent = stampa;
            document.getElementById('modal-order-kolicina').textContent = kolicina;
        });

        $('#vrsta').on('change', function () {
            var selectedType = $(this).val();

            $.ajax({
                url: window.location.origin + '/get-velicine-kese',
                type: 'GET',
                data: {
                    vrsta: selectedType
                },
                success: function (data) {
                    let options = '<option value="">-- Izaberite veličinu --</option>';
                    data.forEach(function (item) {
                        options += `<option value="${item.velicina}">${item.naziv ?? item.velicina ?? 'Veličina bez imena'}</option>`;
                    });
                    $('#velicina').html(options);
                },
                error: function () {
                    alert("Greška prilikom dohvatanja veličina.");
                }
            });
        });
    }

    if(path === "prices"){
        document.querySelector("#buttonPricesPDF").addEventListener("click", function(){
            const element = document.getElementById('tabeleCene');

            var opt = {
                margin:       0.5,
                filename:     'cenovnik-kesa.pdf',
                image:        { type: 'jpeg', quality: 0.98 },
                html2canvas:  { scale: 2 },
                jsPDF:        { unit: 'in', format: 'a4', orientation: 'portrait' }
            };

            html2pdf().from(element).set(opt).save();
        })

        const scrollBtn = document.getElementById('scrollBtn');
        const tabeleCene = document.getElementById('tabeleCene');

        window.addEventListener('scroll', () => {
        const distanceToTables = tabeleCene.getBoundingClientRect().top;

            if (distanceToTables < 100) {
            scrollBtn.style.opacity = '0';
            scrollBtn.style.pointerEvents = 'none';
            } else {
            scrollBtn.style.opacity = '1';
            scrollBtn.style.pointerEvents = 'auto';
            }
        });

        scrollBtn.addEventListener('click', () => {
            tabeleCene.scrollIntoView({ behavior: 'smooth' });
        });

    }

    if(path ==="gallery"){


    }

    if(path === "order"){


    document.getElementById('stampaTip').addEventListener('change', function() {
        const descriptions = {
            '1+0':  'štampa 1 boje na jednoj strani kese',
            '2+0':  'štampa 2 boje na jednoj strani kese',
            '3+0':  'štampa 3 boje na jednoj strani kese',
            '4+0':  'štampa 4 boje na jednoj strani kese',
            '5+0':  'štampa 5 boje na jednoj strani kese',
            '1+1':  'štampa 1 boje na jednoj strani i 1 boje na drugoj strani kese',
            '2+1':  'štampa 2 boje na jednoj strani i 1 boje na drugoj strani kese',
            '3+1':  'štampa 3 boje na jednoj strani i 1 boje na drugoj strani kese',
            '4+1':  'štampa 4 boje na jednoj strani i 1 boje na drugoj strani kese',
            '2+2':  'štampa 2 boje na jednoj strani i 2 boje na drugoj strani kese',
            '3+2':  'štampa 3 boje na jednoj strani i 2 boje na drugoj strani kese',
            'višs-od-5': 'više od 5 boja u štampi'
        };

        const selectedValue = this.value;
        const text = descriptions[selectedValue] || '';

        document.querySelector('.bagTypeText').innerText = text;
    });




        const dostupneBoje = {
            "banana_bez_ojacanja": {
                LDPe: ["bela", "crna", "crvena", "zuta", "svetlo-plava", "siva", "krem", "ljubicasta"],
                HDPe: ["bela", "crvena", "zuta", "tamno-plava", "siva"]
            },
            "bez_ojacanja_s_faltom": {
                LDPe: ["bela", "crna", "zuta", "bez", "siva"],
                HDPe: ["bela", "zuta", "siva", "providna-boja-leda"]
            },
            "sa_ojacanom_banana": {
                LDPe: ["bela", "crna", "crvena", "zuta", "svetlo-plava", "tamno-plava", "siva", "bez", "roze", "ljubicasta", "narandzasta", "zelena", "krem"],
                HDPe: ["bela", "crvena", "zuta", "tamno-plava", "siva", "providna-boja-leda", "krem"]
            },
            "sa_ojacanom_banana_s_faltom": {
                LDPe: ["bela", "crna", "zuta", "bez", "siva"],
                HDPe: ["bela", "zuta", "siva", "providna-boja-leda"]
            },
            "fleksibilna": {
                LDPe: ["bela", "crna", "crvena", "zuta", "svetlo-plava", "tamno-plava", "siva", "bez", "roze", "ljubicasta", "narandzasta", "zelena", "krem"],
                HDPe: ["bela", "crvena", "zuta", "tamno-plava", "siva", "providna-boja-leda", "krem"]
            },
            "fleksibilna_s_faltom": {
                LDPe: ["bela", "crna", "zuta", "bez", "siva"],
                HDPe: ["bela", "zuta", "siva", "providna-boja-leda"]
            }
        };
        const bojeRucke = ["bela", "crna", "crvena", "zuta", "tamno-plava", "siva", "narandzasta", "zelena"];

        const banana_bez_ojacanja = {
          // name : "banana_bez_ojacanja",
          25 : [20],
          30 : [20],
          35 : [25, 30, 35],
          45 : [25, 30, 35, 40, 45, 50],
          50 : [30, 35, 40, 45, 50, 55, 60, 65]
        };

        const bez_ojacanja_s_faltom = {
          // name: "bez_ojacanja_s_faltom",
          50 : [30, 35, 40, 45, 50, 55, 60, 65, 70],
          60 : [30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85]
        }

        const sa_ojacanom_banana = {
          // name: "sa_ojacanom_banana",
          35 : [25, 30, 35],
          45 : [25, 30, 35, 40, 45, 50],
          50 : [30, 35, 40, 45, 50, 55, 60, 65]
        }

        const sa_ojacanom_banana_s_faltom = {
          // name: "sa_ojacanom_banana_s_faltom",
          50 : [30, 35, 40, 45, 50, 55, 60, 65, 70],
          60 : [30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85]
        }

        const fleksibilna = {
          // name: "fleksibilna",
          35 : [25, 30, 35],
          45 : [25, 30, 35, 40, 45, 50],
          50 : [30, 35, 40, 45, 50, 55, 60, 65]
        }

        const fleksibilna_s_faltom = {
          // name: "fleksibilna_s_faltom",
          50 : [30, 35, 40, 45, 50, 55, 60, 65, 70],
          60 : [30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85]
        }

        document.querySelector(".color-options").innerHTML = ``;
        getSizes(banana_bez_ojacanja);
        getColors("banana_bez_ojacanja");
        document.querySelectorAll(".izborBojeRucke").forEach((e) => {
            e.classList.remove("display-block");
            e.classList.add("display-none");
        });
        document.querySelectorAll(".LeftBlockinfo").forEach(el => {
            el.addEventListener("click", () => {
                document.querySelectorAll(".LeftBlockinfo").forEach(e => e.classList.remove("active"));
                el.classList.add("active");
                el.nextElementSibling.checked = true;
                switch(el.nextElementSibling.value) {
                    case "banana_bez_ojacanja":
                        getSizes(banana_bez_ojacanja);
                        getColors(el.nextElementSibling.value);
                        document.querySelectorAll(".izborBojeRucke").forEach((e) => {
                            e.classList.remove("display-block");
                            e.classList.add("display-none");
                        });
                        document.querySelector(".bojeRucke").innerHTML = ``;
                        document.querySelector("." + el.nextElementSibling.value).className = "kesa mt-5 kesa-boja " + el.nextElementSibling.value;
                        break;
                    case "bez_ojacanja_s_faltom":
                        getSizes(bez_ojacanja_s_faltom);
                        getColors(el.nextElementSibling.value);
                        document.querySelectorAll(".izborBojeRucke").forEach((e) => {
                            e.classList.remove("display-block");
                            e.classList.add("display-none");
                        });
                        document.querySelector(".bojeRucke").innerHTML = ``;
                        document.querySelector("." + el.nextElementSibling.value).className = "kesa mt-5 kesa-boja " + el.nextElementSibling.value;
                        break;
                    case "sa_ojacanom_banana":
                        getSizes(sa_ojacanom_banana);
                        getColors(el.nextElementSibling.value);
                        document.querySelectorAll(".izborBojeRucke").forEach((e) => {
                            e.classList.remove("display-block");
                            e.classList.add("display-none");
                        });
                        document.querySelector(".bojeRucke").innerHTML = ``;
                        document.querySelector("." + el.nextElementSibling.value).className = "kesa mt-5 kesa-boja " + el.nextElementSibling.value;
                        break;
                    case "sa_ojacanom_banana_s_faltom":
                        getSizes(sa_ojacanom_banana_s_faltom);
                        getColors(el.nextElementSibling.value);
                        document.querySelectorAll(".izborBojeRucke").forEach((e) => {
                            e.classList.remove("display-block");
                            e.classList.add("display-none");
                        });
                        document.querySelector(".bojeRucke").innerHTML = ``;
                        document.querySelector("." + el.nextElementSibling.value).className = "kesa mt-5 kesa-boja " + el.nextElementSibling.value;
                        break;
                    case "fleksibilna":
                        getSizes(fleksibilna);
                        getColors(el.nextElementSibling.value);
                        document.querySelectorAll(".izborBojeRucke").forEach((e) => {
                            e.classList.add("display-block");
                            e.classList.remove("display-none");
                        });
                        document.querySelector(".bojeRucke").innerHTML = ``;
                        document.querySelectorAll(".bag-handleVelika").forEach((rucka) => {
                            rucka.className = "bag-handleVelika";
                        })
                        bojeRucke.forEach((e) => {
                            document.querySelector(".bojeRucke").innerHTML += `
                                <input type="radio" id="rucka${e}" name="bojaRucke" value="${e}">
                                <label for="rucka${e}" class="color-box boja-${e}"></label>`
                        })
                        document.querySelector("." + el.nextElementSibling.value).className = "kesa mt-5 kesa-boja " + el.nextElementSibling.value;
                        getHandleColors(el.nextElementSibling.value);
                        break;
                    case "fleksibilna_s_faltom":
                        getSizes(fleksibilna_s_faltom);
                        getColors(el.nextElementSibling.value);
                        document.querySelectorAll(".izborBojeRucke").forEach((e) => {
                            e.classList.add("display-block");
                            e.classList.remove("display-none");
                        });
                        document.querySelector(".bojeRucke").innerHTML = ``;
                        document.querySelectorAll(".bag-handleVelika").forEach((rucka) => {
                            rucka.className = "bag-handleVelika";
                        })
                        bojeRucke.forEach((e) => {
                            document.querySelector(".bojeRucke").innerHTML += `
                                <input type="radio" id="rucka${e}" name="bojaRucke" value="${e}">
                                <label for="rucka${e}" class="color-box boja-${e}"></label>`
                        })
                        document.querySelector("." + el.nextElementSibling.value).className = "kesa mt-5 kesa-boja " + el.nextElementSibling.value;
                        getHandleColors(el.nextElementSibling.value);
                        break;
                }
                document.getElementsByName("materijal").forEach((materijal) => {
                    materijal.checked = false;
                })
                document.querySelector(".color-options").innerHTML = ``;
            });
        });

        function getSizes(tipKese) {
            let visine = Object.keys(tipKese);
            document.querySelector("#horizontalColumn").innerHTML = ``;
            visine.forEach(element => {
                document.querySelector("#horizontalColumn").innerHTML +=`
                                 <input type="radio" id="visina${element}" name="visina" value="${element}">
                                 <label for="visina${element}">${element}</label>`;
            });
            document.querySelector("#horizontalRow").innerHTML = ``;
            document.getElementsByName("visina").forEach((element) => {
                element.addEventListener("click", () => {
                    if (element.checked === true) {
                        document.querySelector("#horizontalRow").innerHTML = ``;
                        let sirine = tipKese[element.value];
                        sirine.forEach((sirina) => {
                            document.querySelector("#horizontalRow").innerHTML += `
                                        <input type="radio" id="sirina${sirina}" name="sirina" value="${sirina}">
                                        <label for="sirina${sirina}">${sirina}</label>`;
                        })
                    }
                })
            })
        }



        function getHandleColors() {
            document.getElementsByName("bojaRucke").forEach((element) => {
                element.addEventListener("click", () => {
                    // console.log(element.value);
                    let ruckaElement = document.querySelectorAll(".bag-handleVelika");
                    ruckaElement.forEach((el) => {
                        el.className = "bag-handleVelika";
                        el.classList.add("boja-" + element.value);
                        console.log()
                    })
                })
            })
        }

        function getColors(stringTipKese) {
            const materijalContainer = document.querySelector(".materijal-container");
            const colorOptions = document.querySelector(".color-options");

            if (!materijalContainer || !colorOptions) {
                console.error("Required containers not found.");
                return;
            }

            materijalContainer.replaceWith(materijalContainer.cloneNode(true));
            const freshContainer = document.querySelector(".materijal-container");

            freshContainer.addEventListener("click", (e) => {
                const target = e.target;

                if (target.name === "materijal" && target.checked) {
                    const selectedMaterial = target.value;
                    const boje = dostupneBoje[stringTipKese];

                    if (boje && boje[selectedMaterial]) {
                        const html = boje[selectedMaterial].map((boja, index) => `
                    <input type="radio" id="color${index}" name="bojaKese" value="${boja}">
                    <label for="color${index}" class="color-box boja-${boja.replace(/\s+/g, "-")}"></label>
                `).join("");
                        colorOptions.innerHTML = html;
                    } else {
                        colorOptions.innerHTML = "<p>Nema dostupnih boja za ovaj materijal.</p>";
                    }
                }
                document.getElementsByName("bojaKese").forEach((el) => {
                    // console.log(el)
                    el.addEventListener("click", () => {
                        let kesaElement = document.querySelector("." + stringTipKese);
                        kesaElement.className = "kesa mt4 kesa-boja " + stringTipKese;
                        if (!kesaElement.classList.contains("active")) {
                            kesaElement.classList.add("active");
                        }
                        kesaElement.classList.add("boja-" + el.value);
                    })
                })
            });


        }
        const leftBlocks = document.querySelectorAll('.LeftBlockinfo');
        const kese = document.querySelectorAll('.kesa');

        leftBlocks.forEach((block, index) => {
            block.addEventListener('click', () => {

                kese.forEach(kesa => kesa.classList.remove('active'));
                leftBlocks.forEach(b => b.classList.remove('active'));


                if (kese[index]) {
                    kese[index].classList.add('active');
                }
                block.classList.add('active');
            });
        });


        leftBlocks[0].classList.add('active');
        kese[0].classList.add('active');
        }
}


        document.addEventListener('DOMContentLoaded', function () {
            const modalImg = document.getElementById('modalImage');

            document.querySelectorAll('.galleryImages').forEach(img => {
                img.addEventListener('click', function () {
                    modalImg.src = this.getAttribute('data-img');
                });
            });
        });

        const img = document.getElementById('english');

        img.addEventListener('mouseover', () => {
            img.src = img.dataset.hover;
        });

        img.addEventListener('mouseout', () => {
            img.src = img.dataset.original;
        });