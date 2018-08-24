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

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_nuevopaciente").innerHTML = this.responseText;

        }
    }

    xmlhttp.open("GET", "nuevopaciente.php?q=" + str, true);
    xmlhttp.send();
}

function showModificarAuxiliar(str) {

    document.getElementById("div_nuevopaciente").innerHTML = "";

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_modificaraux").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "modificar_auxiliar.php?q=" + str, true);
    xmlhttp.send();
}

function habilitarcampos() {
    document.getElementById("cedula").removeAttribute("disabled");
    document.getElementById("nombre").removeAttribute("disabled");
    document.getElementById("apellido").removeAttribute("disabled");
    document.getElementById("fec_nac").removeAttribute("disabled");
    document.getElementById("direccion").removeAttribute("disabled");
    document.getElementById("telefono").removeAttribute("disabled");
    document.getElementById("edad").removeAttribute("disabled");
    document.getElementById("contrasena").removeAttribute("disabled");

}
