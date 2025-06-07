window.onload = function(){
    var path = window.location.pathname.split("/").pop();


    if(path == "orders"){
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

    if(path == "prices"){
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

  if(path == "order"){
      const dostupneBoje = {
        "banana_bez_ojacanja": {
            LDPe: ["bela", "crna", "crvena", "zuta", "svetlo plava", "siva", "krem", "ljubicasta"],
            HDPe: ["bela", "crvena", "zuta", "tamno plava", "siva"]
        },
        "bez_ojacanja_s_faltom": {
            LDPe: ["bela", "crna", "zuta", "bez", "siva"],
            HDPe: ["bela", "zuta", "siva", "providna boja leda"]
        },
        "sa_ojacanom_banana": {
            LDPe: ["bela", "crna", "crvena", "zuta", "svetlo plava", "tamno plava", "siva", "bez", "roze", "ljubicasta", "narandzasta", "zelena", "krem"],
            HDPe: ["bela", "crvena", "zuta", "tamno plava", "siva", "providna boja leda", "krem"]
        },
        "sa_ojacanom_banana_s_faltom": {
            LDPe: ["bela", "crna", "zuta", "bez", "siva"],
            HDPe: ["bela", "zuta", "siva", "providna boja leda"]
        },
        "fleksibilna": {
            LDPe: ["bela", "crna", "crvena", "zuta", "svetlo plava", "tamno plava", "siva", "bez", "roze", "ljubicasta", "narandzasta", "zelena", "krem"],
            HDPe: ["bela", "crvena", "zuta", "tamno plava", "siva", "providna boja leda", "krem"]
        },
        "fleksibilna_s_faltom": {
            LDPe: ["bela", "crna", "zuta", "bez", "siva"],
            HDPe: ["bela", "zuta", "siva", "providna boja leda"]
        }
    };

      const banana_bez_ojacanja = {
          25 : [20],
          30 : [20],
          35 : [25, 30, 35],
          45 : [25, 30, 35, 40, 45, 50],
          50 : [30, 35, 40, 45, 50, 55, 60, 65]
      };

      const bez_ojacanja_s_faltom = {
          50 : [30, 35, 40, 45, 50, 55, 60, 65, 70],
          60 : [30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85]
      }

      const sa_ojacanom_banana = {
          35 : [25, 30, 35],
          45 : [25, 30, 35, 40, 45, 50],
          50 : [30, 35, 40, 45, 50, 55, 60, 65]
      }

      const sa_ojacanom_banana_s_faltom = {
          50 : [30, 35, 40, 45, 50, 55, 60, 65, 70],
          60 : [30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85]
      }

      const fleksibilna = {
          35 : [25, 30, 35],
          45 : [25, 30, 35, 40, 45, 50],
          50 : [30, 35, 40, 45, 50, 55, 60, 65]
      }

      const fleksibilna_s_faltom = {
          50 : [30, 35, 40, 45, 50, 55, 60, 65, 70],
          60 : [30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85]
      }

      // console.log(Object.keys(banana_bez_ojacanja));

    document.querySelectorAll(".LeftBlockinfo").forEach((el) => {
        el.addEventListener("click", function () {
            console.log("Radi");
        });
    });

    document.querySelectorAll(".LeftBlockinfo").forEach(el => {
        el.addEventListener("click", () => {
            document.querySelectorAll(".LeftBlockinfo").forEach(e => e.classList.remove("active"));
            el.classList.add("active");
        });
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
