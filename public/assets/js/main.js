window.onload = function(){
    var path = window.location.pathname.split("/").pop();

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


document.querySelectorAll('.hover-swap').forEach(img => {
    const originalSrc = img.src;
    const hoverSrc = img.getAttribute('data-hover');

    img.addEventListener('mouseenter', () => {
        img.src = hoverSrc;
    });

    img.addEventListener('mouseleave', () => {
        img.src = originalSrc;
    });
});




}
