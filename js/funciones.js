 function showMedico(str) {

     document.getElementById("div_nuevoauxiliar").innerHTML = "";
     document.getElementById("div_reporte").innerHTML = "";

     var xmlhttp = new XMLHttpRequest();
     xmlhttp.onreadystatechange = function () {
         if (this.readyState == 4 && this.status == 200) {
             document.getElementById("div_nuevomedico").innerHTML = this.responseText;
         }
     }

     xmlhttp.open("GET", "nuevo_medico.php?q=" + str, true);
     xmlhttp.send();
 }


 function showAuxiliar(str) {

     document.getElementById("div_nuevomedico").innerHTML = "";
     document.getElementById("div_reporte").innerHTML = "";

     var xmlhttp = new XMLHttpRequest();
     xmlhttp.onreadystatechange = function () {
         if (this.readyState == 4 && this.status == 200) {
             document.getElementById("div_nuevoauxiliar").innerHTML = this.responseText;
         }
     }

     xmlhttp.open("GET", "nuevo_auxiliar.php?q=" + str, true);
     xmlhttp.send();
 }


 function showReporte(str) {

    document.getElementById("div_nuevomedico").innerHTML = "";
    document.getElementById("div_nuevoauxiliar").innerHTML = "";    

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_reporte").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "reporte.php?q=" + str, true);
    xmlhttp.send();
}