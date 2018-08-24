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


function showPaciente(str) {

    document.getElementById("div_modificaraux").innerHTML = ""; 
    document.getElementById("div_modificarcita").innerHTML = "";  

   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onreadystatechange = function () {
       if (this.readyState == 4 && this.status == 200) {
           document.getElementById("div_nuevopaciente").innerHTML = this.responseText;
           
       }
   }

   xmlhttp.open("GET", "nuevo_paciente.php?q=" + str, true);
   xmlhttp.send();
}

function showModificarAuxiliar(str) {

    document.getElementById("div_nuevopaciente").innerHTML = "";  
    document.getElementById("div_modificarcita").innerHTML = "";  

   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onreadystatechange = function () {
       if (this.readyState == 4 && this.status == 200) {
           document.getElementById("div_modificaraux").innerHTML = this.responseText;
       }
   }

   xmlhttp.open("GET", "modificar_auxiliar.php?q=" + str, true);
   xmlhttp.send();
}

function showCitaMedica(str) {

    document.getElementById("div_nuevopaciente").innerHTML = ""; 
    document.getElementById("div_modificaraux").innerHTML = ""; 
     

   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onreadystatechange = function () {
       if (this.readyState == 4 && this.status == 200) {
           document.getElementById("div_modificarcita").innerHTML = this.responseText;
       }
   }

   xmlhttp.open("GET", "modificar_citamedica.php?q=" + str, true);
   xmlhttp.send();
}



function habilitarcampos()
{
    document.getElementById("cedula").removeAttribute("disabled");
    document.getElementById("nombre").removeAttribute("disabled");
    document.getElementById("apellido").removeAttribute("disabled");
    document.getElementById("fec_nac").removeAttribute("disabled");
    document.getElementById("direccion").removeAttribute("disabled");
    document.getElementById("telefono").removeAttribute("disabled");
    document.getElementById("edad").removeAttribute("disabled");
    document.getElementById("contrasena").removeAttribute("disabled");
    
}


function showCita(str) {

    document.getElementById("div_buscarcita").innerHTML = "";
    document.getElementById("div_reservarcita").innerHTML = "";
    document.getElementById("div_listarcitapendiente").innerHTML = "";
    document.getElementById("div_reportecita").innerHTML = "";

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_nuevacita").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "nueva_cita.php?q=" + str, true);
    xmlhttp.send();
}

function buscarCita(str) {

    document.getElementById("div_nuevacita").innerHTML = "";
    document.getElementById("div_reservarcita").innerHTML = "";
    document.getElementById("div_listarcitapendiente").innerHTML = "";
    document.getElementById("div_reportecita").innerHTML = "";

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_buscarcita").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "buscar_cita.php?q=" + str, true);
    xmlhttp.send();
}

function reservarCita(str) {

    document.getElementById("div_nuevacita").innerHTML = "";
    document.getElementById("div_buscarcita").innerHTML = "";
    document.getElementById("div_listarcitapendiente").innerHTML = "";
    document.getElementById("div_reportecita").innerHTML = "";

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_reservarcita").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "reservar_cita.php?q=" + str, true);
    xmlhttp.send();
}


function listarCitaPendiente(str) {

    document.getElementById("div_nuevacita").innerHTML = "";
    document.getElementById("div_buscarcita").innerHTML = "";
    document.getElementById("div_reservarcita").innerHTML = "";
    document.getElementById("div_reportecita").innerHTML = "";
    

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_listarcitapendiente").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "listar_citapendiente.php?q=" + str, true);
    xmlhttp.send();
}

function reporteCita(str) {

    document.getElementById("div_nuevacita").innerHTML = "";
    document.getElementById("div_buscarcita").innerHTML = "";
    document.getElementById("div_reservarcita").innerHTML = "";
    document.getElementById("div_listarcitapendiente").innerHTML = "";
    

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_reportecita").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "reporte_cita.php?q=" + str, true);
    xmlhttp.send();
}




