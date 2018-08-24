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



function guardarDoctor() {
   
  
    var dataString = 'cedula='+ document.getElementById('cedula').value+
    '&nombre='+ document.getElementById('nombre').value+
    '&apellido='+ document.getElementById('apellido').value+
    '&telefono='+document.getElementById('telefono').value+
    '&especialidad='+document.getElementById('especialidad').value+
    '&inputPassword='+document.getElementById('inputPassword').value;


    $.ajax({
        type: "POST",
        url: "php/ingresarMedico.php",
        data: dataString,
        success: function() {

            alert("Ha sido ejecutada la acción.");
            //recuperando las variables

        }

    });
   
    /*
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            alert("GUATDADO CORRECTAMENTE")
    
        }
        alert("params 3",params);

       
    }

    xmlhttp.open("POST", "php/ingresarMedico.php", true);
    xmlhttp.send(params);
*/
    //a/sdasd
       /* document.getElementById("div_nuevoauxiliar").innerHTML = "";
        document.getElementById("div_reporte").innerHTML = "";
    
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("div_nuevomedico").innerHTML = this.responseText;
            }
        }
    
        xmlhttp.open("GET", "nuevo_medico.php?q=" + str, true);
        xmlhttp.send();*/
    


        //asdasd
       


}