/*__________________________________________Inicio Administrador - Administrador___________________________________________________*/


function showMedico(str) {

    document.getElementById("div_nuevoauxiliar").innerHTML = "";
    document.getElementById("div_reporte").innerHTML = "";
    document.getElementById("div_buscador").innerHTML = "";

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
    document.getElementById("div_buscador").innerHTML = "";

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
    document.getElementById("div_buscador").innerHTML = "";

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_reporte").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "reporte.php?q=" + str, true);
    xmlhttp.send();
}

function showBuscador(str) {

    document.getElementById("div_nuevomedico").innerHTML = "";
    document.getElementById("div_nuevoauxiliar").innerHTML = "";
    document.getElementById("div_reporte").innerHTML = "";
    var strBuscar = document.getElementById('strBuscar').value;


    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_buscador").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "listar_ma.php?strPalabra=" + strBuscar, true);
    xmlhttp.send();
}

/*__________________________________________Fin Administrador - Administrador___________________________________________________*/

/*__________________________________________Inicio Administrador - Auxiliar_____________________________________________________*/

function showPaciente(str) {

    document.getElementById("div_modificaraux").innerHTML = "";
    document.getElementById("div_modificarcita").innerHTML = "";
    document.getElementById("div_historiasClinicas").innerHTML = "";
    document.getElementById("div_CitasMedicas").innerHTML = "";

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
    document.getElementById("div_historiasClinicas").innerHTML = "";
    document.getElementById("div_CitasMedicas").innerHTML = "";

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
    document.getElementById("div_historiasClinicas").innerHTML = "";
    document.getElementById("div_CitasMedicas").innerHTML = "";


    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_modificarcita").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "modificar_citamedica.php?q=" + str, true);
    xmlhttp.send();
}

function showBuscadorHC(str) {

    document.getElementById("div_nuevopaciente").innerHTML = "";
    document.getElementById("div_modificaraux").innerHTML = "";
    document.getElementById("div_modificarcita").innerHTML = "";
    document.getElementById("div_CitasMedicas").innerHTML = "";
    var strBuscar = document.getElementById('strBuscar').value;


    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_historiasClinicas").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "listar_hc.php?strPalabra=" + strBuscar, true);
    xmlhttp.send();
}

function showBuscadorCitasMedicasPendientes(str) {

    document.getElementById("div_nuevopaciente").innerHTML = "";
    document.getElementById("div_modificaraux").innerHTML = "";
    document.getElementById("div_modificarcita").innerHTML = "";
    document.getElementById("div_historiasClinicas").innerHTML = "";
    var strBuscar = document.getElementById('strBuscar').value;


    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_CitasMedicas").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "listarCitasPendientes.php?strPalabra=" + strBuscar, true);
    xmlhttp.send();
}

function showModificarHClinica(str) {

    document.getElementById("div_nuevopaciente").innerHTML = "";
    document.getElementById("div_modificaraux").innerHTML = "";
    document.getElementById("div_modificarcita").innerHTML = "";
    document.getElementById("div_historiasClinicas").innerHTML = "";
    var strBuscar = document.getElementById('strBuscar').value;


    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_CitasMedicas").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "modificar_hclinica.php?strPalabra=" + strBuscar, true);
    xmlhttp.send();
}

/*__________________________________________Fin Administrador - Auxiliar________________________________________________________*/

/*__________________________________________Inicio Administrador - Médico_______________________________________________________*/

function reservarCita(str) {

    document.getElementById("div_nuevacita").innerHTML = "";
    document.getElementById("div_buscarcita").innerHTML = "";
    document.getElementById("div_listarcitapendiente").innerHTML = "";
    document.getElementById("div_reportecita").innerHTML = "";
    document.getElementById("div_modificarmedico").innerHTML = "";
    document.getElementById("div_nuevahistclinica").innerHTML = "";
    document.getElementById("div_historiac").innerHTML = "";
    document.getElementById("div_listartotalpacientes").innerHTML = "";
    


    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_reservarcita").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "reservar_cita.php?q=" + str, true);
    xmlhttp.send();
}

function showCita(str) {

    document.getElementById("div_buscarcita").innerHTML = "";
    document.getElementById("div_reservarcita").innerHTML = "";
    document.getElementById("div_listarcitapendiente").innerHTML = "";
    document.getElementById("div_reportecita").innerHTML = "";
    document.getElementById("div_modificarmedico").innerHTML = "";
    document.getElementById("div_nuevahistclinica").innerHTML = "";
    document.getElementById("div_historiac").innerHTML = "";
    document.getElementById("div_listartotalpacientes").innerHTML = "";


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
    document.getElementById("div_modificarmedico").innerHTML = "";
    document.getElementById("div_nuevahistclinica").innerHTML = "";
    document.getElementById("div_historiac").innerHTML = "";
    document.getElementById("div_listartotalpacientes").innerHTML = "";


    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_buscarcita").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "buscar_cita.php?q=" + str, true);
    xmlhttp.send();
}

function listarCitaPendiente(str) {

    document.getElementById("div_nuevacita").innerHTML = "";
    document.getElementById("div_buscarcita").innerHTML = "";
    document.getElementById("div_reservarcita").innerHTML = "";
    document.getElementById("div_reportecita").innerHTML = "";
    document.getElementById("div_modificarmedico").innerHTML = "";
    document.getElementById("div_nuevahistclinica").innerHTML = "";
    document.getElementById("div_historiac").innerHTML = "";
    document.getElementById("div_listartotalpacientes").innerHTML = "";


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
    document.getElementById("div_modificarmedico").innerHTML = "";
    document.getElementById("div_nuevahistclinica").innerHTML = "";
    document.getElementById("div_historiac").innerHTML = "";
    document.getElementById("div_listartotalpacientes").innerHTML = "";


    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_reportecita").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "reporte_cita.php?q=" + str, true);
    xmlhttp.send();
}

function showModificarMedico(str) {

    document.getElementById("div_nuevacita").innerHTML = "";
    document.getElementById("div_buscarcita").innerHTML = "";
    document.getElementById("div_reservarcita").innerHTML = "";
    document.getElementById("div_listarcitapendiente").innerHTML = "";
    document.getElementById("div_reportecita").innerHTML = "";
    document.getElementById("div_nuevahistclinica").innerHTML = "";
    document.getElementById("div_historiac").innerHTML = "";

    document.getElementById("div_listartotalpacientes").innerHTML = "";

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_modificarmedico").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "modificar_medico.php?q=" + str, true);
    xmlhttp.send();
}

function showNuevoHistoriaCc(str) {

    document.getElementById("div_nuevacita").innerHTML = "";
    document.getElementById("div_buscarcita").innerHTML = "";
    document.getElementById("div_reservarcita").innerHTML = "";
    document.getElementById("div_listarcitapendiente").innerHTML = "";
    document.getElementById("div_reportecita").innerHTML = "";
    document.getElementById("div_modificarmedico").innerHTML = "";
    document.getElementById("div_historiac").innerHTML = "";
    document.getElementById("div_listartotalpacientes").innerHTML = "";


    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_modificarmedico").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "nuevo_historiaclinica.php?q=" + str, true);
    xmlhttp.send();
}

function showListarTotalPaciente(str) {

    document.getElementById("div_nuevacita").innerHTML = "";
    document.getElementById("div_buscarcita").innerHTML = "";
    document.getElementById("div_reservarcita").innerHTML = "";
    document.getElementById("div_listarcitapendiente").innerHTML = "";
    document.getElementById("div_reportecita").innerHTML = "";
    document.getElementById("div_modificarmedico").innerHTML = "";
    document.getElementById("div_historiac").innerHTML = "";
    document.getElementById("div_nuevahistclinica").innerHTML = "";


    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_listartotalpacientes").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "listar_totalpacientes.php?q=" + str, true);
    xmlhttp.send();
}

function showHistoriaClinica(str) {

    document.getElementById("div_nuevacita").innerHTML = "";
    document.getElementById("div_buscarcita").innerHTML = "";
    document.getElementById("div_reservarcita").innerHTML = "";
    document.getElementById("div_listarcitapendiente").innerHTML = "";
    document.getElementById("div_reportecita").innerHTML = "";
    document.getElementById("div_modificarmedico").innerHTML = "";
    document.getElementById("div_listartotalpacientes").innerHTML = "";
    

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_historiac").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "ver_historiac.php?q=" + str, true);
    xmlhttp.send();
}



/*__________________________________________Fin Administrador - Médico__________________________________________________________*/


/*__________________________________________Inicio Administrador - Paciente________________________________________________________*/

function showModificarPaciente(str) {

    document.getElementById("div_agregarcita").innerHTML = "";
    document.getElementById("div_listarcitapendientea").innerHTML = "";
    document.getElementById("div_listarcitapendientep").innerHTML = "";

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_modificarpaciente").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "modificar_paciente.php?q=" + str, true);
    xmlhttp.send();
}

function showAgregarCita(str) {

    document.getElementById("div_listarcitapendientea").innerHTML = "";
    document.getElementById("div_listarcitapendientep").innerHTML = "";
    document.getElementById("div_modificarpaciente").innerHTML = "";

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_agregarcita").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "agregar_cita.php?q=" + str, true);
    xmlhttp.send();
}


function showlistarCitaAtendida(str) {

    document.getElementById("div_agregarcita").innerHTML = "";
    document.getElementById("div_listarcitapendientep").innerHTML = "";
    document.getElementById("div_modificarpaciente").innerHTML = "";

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_listarcitapendientea").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "listar_citapendientea.php?q=" + str, true);
    xmlhttp.send();
}

function showlistarCitaPendiente(str) {

    document.getElementById("div_agregarcita").innerHTML = "";
    document.getElementById("div_listarcitapendientea").innerHTML = "";
    document.getElementById("div_modificarpaciente").innerHTML = "";


    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_listarcitapendientep").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "listar_citapendientep.php?q=" + str, true);
    xmlhttp.send();
}



/*__________________________________________Fin Administrador - Paciente___________________________________________________________*/

/*Inicio - Modificar campos*/


function habilitarcampos() {

    document.getElementById("nombrea").removeAttribute("disabled");
    document.getElementById("apellidoa").removeAttribute("disabled");
    document.getElementById("fec_naca").removeAttribute("disabled");
    document.getElementById("direcciona").removeAttribute("disabled");
    document.getElementById("telefonoa").removeAttribute("disabled");
    document.getElementById("correoea").removeAttribute("disabled");


}


function habilitarcamposmedico() {
    document.getElementById("cedula").removeAttribute("disabled");
    document.getElementById("nombre").removeAttribute("disabled");
    document.getElementById("apellido").removeAttribute("disabled");
    document.getElementById("fech_nac").removeAttribute("disabled");
    document.getElementById("direccion").removeAttribute("disabled");
    document.getElementById("correo").removeAttribute("disabled");
    document.getElementById("telefono").removeAttribute("disabled");
    document.getElementById("especialidad").removeAttribute("disabled");

}

function habilitarcampospaciente() {
    // document.getElementById("cedula").removeAttribute("disabled");
    document.getElementById("nombre").removeAttribute("disabled");
    document.getElementById("apellido").removeAttribute("disabled");
    document.getElementById("fech_nac").removeAttribute("disabled");
    document.getElementById("telefono").removeAttribute("disabled");
    document.getElementById("direccion").removeAttribute("disabled");
    document.getElementById("provincia").removeAttribute("disabled");
    document.getElementById("canton").removeAttribute("disabled");
    document.getElementById("ecivil").removeAttribute("disabled");
    document.getElementById("sexo").removeAttribute("disabled");
    document.getElementById("correo").removeAttribute("disabled");
    document.getElementById("profesion").removeAttribute("disabled");

}

function habilitarcamposcmedica()
{
    document.getElementById("peso").removeAttribute("disabled");
    document.getElementById("altura").removeAttribute("disabled");
    document.getElementById("presion").removeAttribute("disabled");
    document.getElementById("motivo_cita").removeAttribute("disabled");
}

function habilitarcamposhclinica()
{
    document.getElementById("responsable").removeAttribute("disabled");
    document.getElementById("observaciones").removeAttribute("disabled");    
}
 

/*Fin - Modificar campos*/


function cambiarContrasenaAdministrador() {

    var dataString = 'ccactual=' + document.getElementById('ccactual').value +
        '&ccnueva=' + document.getElementById('ccnueva').value +
        '&ccverinueva=' + document.getElementById('ccverinueva').value;
    if (document.getElementById('ccnueva').value != document.getElementById('ccverinueva').value) {
        alert("Las contraseñas no coinciden");
    } else {


        $.ajax({
            type: "POST",
            url: "php/admin.php",
            data: dataString,
            success: function (data) {

                alert(data);


            }, error: function (errorThrown) {
                alert("Existe un error" + errorThrown);
            }

        });

    }
}

function guardarDoctor() {

    var verificarCedula = document.getElementById('cedula').value;
    var correito = document.getElementById('correo').value;

    var cedulaVerificada = validarCedula(verificarCedula);
    var valcorreo = validateMail(correito);

    var dataString = 'cedula=' + document.getElementById('cedula').value +
        '&nombre=' + document.getElementById('nombre').value +
        '&apellido=' + document.getElementById('apellido').value +
        '&telefono=' + document.getElementById('telefono').value +
        '&especialidad=' + document.getElementById('especialidad').value +
        '&inputPassword=' + document.getElementById('inputPassword').value +
        '&fech_nac=' + document.getElementById('fech_nac').value +
        '&direccion=' + document.getElementById('direccion').value +
        '&correo=' + document.getElementById('correo').value;

    if (document.getElementById('cedula').value && document.getElementById('nombre').value && document.getElementById('apellido').value &&
        document.getElementById('telefono').value && document.getElementById('especialidad').value && document.getElementById('inputPassword').value &&
        document.getElementById('fech_nac').value && document.getElementById('direccion').value && document.getElementById('correo').value) {
        if (cedulaVerificada == true) {
            if (valcorreo == true) {
                $.ajax({
                    type: "POST",
                    url: "php/ingresarMedico.php",
                    data: dataString,
                    success: function (data) {
                        showMedico("gh");

                        alert(data);
                        //recuperando las variables

                    }, error: function (errorThrown) {
                        alert("Existe un error" + errorThrown);
                    }

                });
            } else {
                alert("El correo electronico ingresado es incorrecto");
            }
        } else {
            alert("La cédula ingresada es incorrecta");
        }
    } else {
        alert("Faltan parametros por llenar");
    }
}

function cambiarContrasenaDoctor() {


    var dataString = 'ccactual=' + document.getElementById('ccactual').value +
        '&ccnueva=' + document.getElementById('ccnueva').value +
        '&ccverinueva=' + document.getElementById('ccverinueva').value;


    if (document.getElementById('ccnueva').value != document.getElementById('ccverinueva').value) {
        alert("Las contraseñas no coinciden");
    } else {
        $.ajax({
            type: "POST",
            url: "php/modificarContrasenaDoctor.php",
            data: dataString,
            success: function (data) {

                alert(data);
                //recuperando las variables

            }, error: function (errorThrown) {
                alert("Existe un error" + errorThrown);
            }

        });
    }


}


function cambiarContrasenaAuxiliar() {


    var dataString = 'ccactual=' + document.getElementById('ccactual').value +
        '&ccnueva=' + document.getElementById('ccnueva').value +
        '&ccverinueva=' + document.getElementById('ccverinueva').value;
    if (document.getElementById('ccnueva').value != document.getElementById('ccverinueva').value) {
        alert("Las contraseñas no coinciden");
    } else {
        $.ajax({
            type: "POST",
            url: "php/modificarContrasenaAuxiliar.php",
            data: dataString,
            success: function (data) {

                alert(data);
                //recuperando las variables

            }, error: function (errorThrown) {
                alert("Existe un error" + errorThrown);
            }

        });
    }



}



function guardarAux() {

    var verificarCedula = document.getElementById('cedula').value;
    var correito = document.getElementById('correo').value;

    var cedulaVerificada = validarCedula(verificarCedula);
    var valcorreo = validateMail(correito);

    var dataString = 'cedulaAux=' + document.getElementById('cedula').value +
        '&nombreAux=' + document.getElementById('nombre').value +
        '&apellidoAux=' + document.getElementById('apellido').value +
        '&telefonoAux=' + document.getElementById('telefono').value +
        '&inputPasswordAux=' + document.getElementById('inputPassword').value +
        '&fech_nacAux=' + document.getElementById('fech_nac').value +
        '&direccionAux=' + document.getElementById('direccion').value +
        '&correoAux=' + document.getElementById('correo').value;

    if (document.getElementById('cedula').value && document.getElementById('nombre').value &&
        document.getElementById('apellido').value && document.getElementById('telefono').value && document.getElementById('inputPassword').value
        && document.getElementById('fech_nac').value && document.getElementById('direccion').value && document.getElementById('correo').value) {
        if (cedulaVerificada == true) {
            if (valcorreo == true) {
                $.ajax({
                    type: "POST",
                    url: "php/ingresarAuxiliar.php",
                    data: dataString,
                    success: function (data) {
                        showAuxiliar("gh");
                        alert(data);
                        //recuperando las variables

                    }, error: function (errorThrown) {
                        alert("Existe un error" + errorThrown);
                    }


                });
            } else {
                alert("El correo electronico ingresado es incorrecto");
            }
        } else {
            alert("La cédula ingresada es incorrecta");
        }
    } else {
        alert("Faltan parmetros por llenar");
    }



}


function guardarHistoriaClinicaPasiente() {

    var verificarCedula = document.getElementById('cedula').value;
    var correito = document.getElementById('correo').value;

    var cedulaVerificada = validarCedula(verificarCedula);
    var valcorreo = validateMail(correito);


    var dataString = 'cedulaHist=' + document.getElementById('cedula').value +
        '&nombreHist=' + document.getElementById('nombre').value +
        '&apellidoHist=' + document.getElementById('apellido').value +
        '&fech_nacHist=' + document.getElementById('fech_nac').value +
        '&telefonoHist=' + document.getElementById('telefono').value +
        '&direccionHist=' + document.getElementById('direccion').value +
        '&provinciaHist=' + document.getElementById('provincia').value +
        '&cantonHist=' + document.getElementById('canton').value +
        '&ecivilHist=' + document.getElementById('ecivil').value +
        '&sexoHist=' + document.getElementById('sexo').value +
        '&profesionHist=' + document.getElementById('profesion').value +
        '&contrasenaHist=' + document.getElementById('contrasena').value +
        '&correoHist=' + document.getElementById('correo').value +
        '&responsableHist=' + document.getElementById('responsable').value +
        '&observacionesHist=' + document.getElementById('observaciones').value;

    if (document.getElementById('cedula').value && document.getElementById('nombre').value && document.getElementById('apellido').value
        && document.getElementById('fech_nac').value && document.getElementById('telefono').value && document.getElementById('direccion').value &&
        document.getElementById('provincia').value && document.getElementById('canton').value && document.getElementById('ecivil').value && document.getElementById('sexo').value
        && document.getElementById('profesion').value && document.getElementById('contrasena').value && document.getElementById('responsable').value && document.getElementById('correo').value && document.getElementById('responsable').value
    ) {

        if (cedulaVerificada == true) {
            if (valcorreo == true) {
                $.ajax({
                    type: "POST",
                    url: "php/ingresarHistoriaClinicaPaciente.php",
                    data: dataString,
                    success: function (data) {
                        showPaciente("fg");
                        alert(data);
                        //recuperando las variables
                    }
                });
            } else {
                alert("El correo electronico ingresado es incorrecto");
            }
        } else {
            alert("La cédula ingresada es incorrecta");
        }
    } else {
        alert("Faltan parametros por llenar");
    }

    /// historia clinica 




}


function reservarCitaPorMedico() {

    var verificarCedula = document.getElementById('cedula').value;
    var cedulaVerificada = validarCedula(verificarCedula);

    var dataString = 'cedulaReserva=' + document.getElementById('cedula').value +
        '&medicoReserva=' + document.getElementById('medico').value +

        '&fech_consulReserva=' + document.getElementById('fech_consul').value +
        '&horario_medReserva=' + document.getElementById('horario_med').value;


    if (document.getElementById('cedula').value && document.getElementById('medico').value && document.getElementById('fech_consul').value
        && document.getElementById('horario_med').value) {
        if (cedulaVerificada == true) {
            $.ajax({
                type: "POST",
                url: "php/citaMedica.php",
                data: dataString,
                success: function () {
                    reservarCita("sad");
                    alert(data);
                    //recuperando las variables

                }, error: function (errorThrown) {
                    alert("Existe un error" + errorThrown);
                }
            });
        } else {
            alert("La cédula ingresada es incorrecta");
        }
    } else {
        alert("Faltan parametros de llenar para poder reservar la cita medica");
    }



}


function reservarCitaPorPaciente() {
    var dataString = 'cedulaReserva=' + document.getElementById('cedula').value +
        '&medicoReserva=' + document.getElementById('medico').value +

        '&fech_consulReserva=' + document.getElementById('fech_consul').value +
        '&horario_medReserva=' + document.getElementById('horario_med').value;



    if (document.getElementById('cedula').value && document.getElementById('medico').value &&
        document.getElementById('fech_consul').value && document.getElementById('horario_med').value) {
        $.ajax({
            type: "POST",
            url: "php/citaMedica.php",
            data: dataString,
            success: function (data) {
                showAgregarCita("sad");
                alert(data);
                //recuperando las variables

            }, error: function (errorThrown) {
                alert(errorThrown);
            }

        });
    } else {
        alert("Faltan parametros por llenar");
    }



}


function cambiarContrasenaPaciente() {


    var dataString = 'ccactual=' + document.getElementById('ccactual').value +
        '&ccnueva=' + document.getElementById('ccnueva').value +
        '&ccverinueva=' + document.getElementById('ccverinueva').value;


    if (document.getElementById('ccnueva').value != document.getElementById('ccverinueva').value) {
        alert("Las contraseñas no coinciden");
    } else {
        $.ajax({
            type: "POST",
            url: "php/modificarContrasenaDoctor.php",
            data: dataString,
            success: function (data) {

                alert(data);
                //recuperando las variables

            }, error: function (errorThrown) {
                alert("Existe un error" + errorThrown);
            }

        });
    }


}


function modificarPaciente() {

    
    var correito = document.getElementById('correo').value;
    var valcorreo = validateMail(correito);


    var dataString = 'nombreHist=' + document.getElementById('nombre').value +
        '&apellidoHist=' + document.getElementById('apellido').value +
        '&fech_nacHist=' + document.getElementById('fech_nac').value +
        '&telefonoHist=' + document.getElementById('telefono').value +
        '&direccionHist=' + document.getElementById('direccion').value +
        '&provinciaHist=' + document.getElementById('provincia').value +
        '&cantonHist=' + document.getElementById('canton').value +
        '&ecivilHist=' + document.getElementById('ecivil').value +
        '&sexoHist=' + document.getElementById('sexo').value +
        '&profesionHist=' + document.getElementById('profesion').value +

        '&correoHist=' + document.getElementById('correo').value;

    if (document.getElementById('nombre').value && document.getElementById('apellido').value
        && document.getElementById('fech_nac').value && document.getElementById('telefono').value && document.getElementById('direccion').value &&
        document.getElementById('provincia').value && document.getElementById('canton').value && document.getElementById('ecivil').value && document.getElementById('sexo').value
        && document.getElementById('profesion').value && document.getElementById('correo').value) {
            if (valcorreo == true) {
                $.ajax({
                    type: "POST",
                    url: "php/modificarMiCuentaPaciente.php",
                    data: dataString,
                    success: function (data) {
                        showModificarPaciente("a");
                        alert(data);
                        //recuperando las variables
                    }
                });
            } else {
                alert("El correo electronico ingresado es incorrecto");
            }
    } else {
        alert("Faltan parametros por llenar");
    }
}


function modificarMedico() {

    var verificarCedula = document.getElementById('cedula').value;
    var correito = document.getElementById('correo').value;

    var cedulaVerificada = validarCedula(verificarCedula);
    var valcorreo = validateMail(correito);

    var dataString = 'cedula=' + document.getElementById('cedula').value +
        '&nombre=' + document.getElementById('nombre').value +
        '&apellido=' + document.getElementById('apellido').value +
        '&telefono=' + document.getElementById('telefono').value +
        '&especialidad=' + document.getElementById('especialidad').value +
        '&fech_nac=' + document.getElementById('fech_nac').value +
        '&direccion=' + document.getElementById('direccion').value +
        '&correo=' + document.getElementById('correo').value;

    if (document.getElementById('cedula').value && document.getElementById('nombre').value && document.getElementById('apellido').value &&
        document.getElementById('telefono').value && document.getElementById('especialidad').value && document.getElementById('fech_nac').value &&
        document.getElementById('direccion').value && document.getElementById('correo').value) {

        if (cedulaVerificada == true) {
            if (valcorreo == true) {
                $.ajax({
                    type: "POST",
                    url: "php/modificarMiCuentaDoctor.php",
                    data: dataString,
                    success: function (data) {
                        showModificarMedico("a");

                        alert(data);
                        //recuperando las variables

                    }, error: function (errorThrown) {
                        alert("Existe un error" + errorThrown);
                    }

                });
            } else {
                alert("El correo electronico ingresado es incorrecto");
            }
        } else {
            alert("La cédula ingresada es incorrecta");
        }
    } else {
        alert("Faltan parametros por llenar");
    }

}

/*function eliminarAuxiliares() {
    var tefo = 'asdasd';
    var dataString = 'hola=' + tefo;
    $.ajax({
        type: "POST",
        url: "php/eliminarauxiliares.php",
        data: dataString,
        success: function (data) {
            //showModificarAuxiliar("gh");
            alert(data);
            //recuperando las variables
        }, error: function (errorThrown) {
            alert("Existe un error" + errorThrown);
        }
    });
}*/

function eliminarAuxiliares(str) {

    var dataString = 'enviar=' + str;
    $.ajax({
        type: 'POST',
        url: 'php/eliminarauxiliares.php',
        data: dataString,
        success: function(data){
            alert('El auxiliar ha sido eliminado correctamente');
            location.reload(true);
        }, error: function (errorThrown) {
            alert("Existe un error" + errorThrown);
        }
    });
}

function eliminarMedicos(str) {
   
    var dataString = 'enviar=' + str;
    $.ajax({
        type: 'POST',
        url: 'php/eliminarmedicos.php',
        data: dataString,
        success: function(data){
            alert('El médico ha sido eliminado correctamente');
            location.reload(true);
        }, error: function (errorThrown) {
            alert("Existe un error" + errorThrown);
        }
    });
}

function modificarAuxiliar() {

    var correito = document.getElementById('correo').value;
    var valcorreo = validateMail(correito);

    var dataString = 'nombreAux=' + document.getElementById('nombrea').value +
        '&apellidoAux=' + document.getElementById('apellidoa').value +
        '&telefonoAux=' + document.getElementById('telefonoa').value +
        '&fech_nacAux=' + document.getElementById('fec_naca').value +
        '&direccionAux=' + document.getElementById('direcciona').value +
        '&correoAux=' + document.getElementById('correoea').value;

    if (document.getElementById('nombrea').value &&
        document.getElementById('apellidoa').value && document.getElementById('telefonoa').value &&
        document.getElementById('fec_naca').value && document.getElementById('direcciona').value && document.getElementById('correoea').value) {
        if (valcorreo == true) {
            $.ajax({
                type: "POST",
                url: "php/modificarMiCuentaAuxiliar.php",
                data: dataString,
                success: function (data) {
                    showModificarAuxiliar("gh");
                    alert(data);
                    //recuperando las variables

                }, error: function (errorThrown) {
                    alert("Existe un error" + errorThrown);
                }
            });
        } else {
            alert("El correo electronico ingresado es incorrecto");
        }
    } else {
        alert("Faltan parmetros por llenar");
    }
}







