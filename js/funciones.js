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




<<<<<<< HEAD



function showReporte(str) {
=======
 function showReporte(str) {
>>>>>>> JC

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


    var dataString = 'cedula=' + document.getElementById('cedula').value +
        '&nombre=' + document.getElementById('nombre').value +
        '&apellido=' + document.getElementById('apellido').value +
        '&telefono=' + document.getElementById('telefono').value +
        '&especialidad=' + document.getElementById('especialidad').value +
        '&inputPassword=' + document.getElementById('inputPassword').value;


    $.ajax({
        type: "POST",
        url: "php/ingresarMedico.php",
        data: dataString,
        success: function () {
            showMedico("gh");
            alert("Ha sido ejecutada la acción.");
            //recuperando las variables

        }

    });

}



function guardarAux() {


    var dataString = 'cedula=' + document.getElementById('cedula').value +
        '&nombre=' + document.getElementById('nombre').value +
        '&apellido=' + document.getElementById('apellido').value +
        '&telefono=' + document.getElementById('telefono').value +
        '&especialidad=' + document.getElementById('especialidad').value +
        '&inputPassword=' + document.getElementById('inputPassword').value;


    $.ajax({
        type: "POST",
        url: "php/ingresarMedico.php",
        data: dataString,
        success: function () {
            showMedico("gh");
            alert("Ha sido ejecutada la acción.");
            //recuperando las variables

        }

    });

}


function showPaciente(str) {

    document.getElementById("div_modificaraux").innerHTML = ""; 
    document.getElementById("div_modificarcita").innerHTML = "";  

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_nuevopaciente").innerHTML = this.responseText;
        }
   xmlhttp.open("GET", "nuevo_paciente.php?q=" + str, true);
   xmlhttp.send();
}
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

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_buscarcita").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "buscar_cita.php?q=" + str, true);
    xmlhttp.send();
}


