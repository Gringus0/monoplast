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
}
