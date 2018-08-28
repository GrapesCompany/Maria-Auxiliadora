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
   

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_buscador").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "listar_ma.php?q=" + str, true);
    xmlhttp.send();
}

/*__________________________________________Fin Administrador - Administrador___________________________________________________*/

/*__________________________________________Inicio Administrador - Auxiliar_____________________________________________________*/

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

/*__________________________________________Fin Administrador - Auxiliar________________________________________________________*/

/*__________________________________________Inicio Administrador - Médico_______________________________________________________*/

function reservarCita(str) {

    document.getElementById("div_nuevacita").innerHTML = "";
    document.getElementById("div_buscarcita").innerHTML = "";
    document.getElementById("div_listarcitapendiente").innerHTML = "";
    document.getElementById("div_reportecita").innerHTML = "";
    document.getElementById("div_modificarmedico").innerHTML = "";

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
    

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_modificarmedico").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "modificar_medico.php?q=" + str, true);
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


function habilitarcamposmedico()
{
    document.getElementById("cedula").removeAttribute("disabled");
    document.getElementById("nombre").removeAttribute("disabled");
    document.getElementById("apellido").removeAttribute("disabled");
    document.getElementById("fech_nac").removeAttribute("disabled");
    document.getElementById("direccion").removeAttribute("disabled");
    document.getElementById("correo").removeAttribute("disabled");
    document.getElementById("telefono").removeAttribute("disabled");
    document.getElementById("especialidad").removeAttribute("disabled");
    document.getElementById("inputPassword").removeAttribute("disabled");
}

function habilitarcampospaciente()
{
    document.getElementById("cedula").removeAttribute("disabled");
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
    document.getElementById("contrasena").removeAttribute("disabled");
}
 

/*Fin - Modificar campos*/


function cambiarContrasenaAdministrador()
{

    var dataString = 'ccactual=' + document.getElementById('ccactual').value +
    '&ccnueva=' + document.getElementById('ccnueva').value +
    '&ccverinueva=' + document.getElementById('ccverinueva').value;
     
$.ajax({
    type: "POST",
    url: "php/admin.php",
    data: dataString,
    success: function (data) {
              
        alert(data);
       

    },error: function (errorThrown) 
    {
       alert("Existe un error"+errorThrown);
    }

});

}

function guardarDoctor() {


    var dataString = 'cedula=' + document.getElementById('cedula').value +
        '&nombre=' + document.getElementById('nombre').value +
        '&apellido=' + document.getElementById('apellido').value +
        '&telefono=' + document.getElementById('telefono').value +
        '&especialidad=' + document.getElementById('especialidad').value+
        '&inputPassword=' + document.getElementById('inputPassword').value+
        '&fech_nac='+document.getElementById('fech_nac').value+
        '&direccion='+document.getElementById('direccion').value+
        '&correo='+document.getElementById('correo').value;

    $.ajax({
        type: "POST",
        url: "php/ingresarMedico.php",
        data: dataString,
        success: function (data) {
            showMedico("gh");
            
            alert(data);
            //recuperando las variables

        },error: function (errorThrown) 
        {
           alert("Existe un error"+errorThrown);
        }

    });

}

function cambiarContrasenaDoctor() {


    var dataString = 'ccactual=' + document.getElementById('ccactual').value +
    '&ccnueva=' + document.getElementById('ccnueva').value +
    '&ccverinueva=' + document.getElementById('ccverinueva').value;
     
    $.ajax({
    type: "POST",
    url: "php/modificarContrasenaDoctor.php",
    data: dataString,
    success: function (data) {
              
        alert(data);
        //recuperando las variables

    },error: function (errorThrown) 
    {
       alert("Existe un error"+errorThrown);
    }

});

}



function cambiarContrasenaAuxiliar() {


    var dataString = 'ccactual=' + document.getElementById('ccactual').value +
    '&ccnueva=' + document.getElementById('ccnueva').value +
    '&ccverinueva=' + document.getElementById('ccverinueva').value;
     
    $.ajax({
    type: "POST",
    url: "php/modificarContrasenaAuxiliar.php",
    data: dataString,
    success: function (data) {
              
        alert(data);
        //recuperando las variables

    },error: function (errorThrown) 
    {
       alert("Existe un error"+errorThrown);
    }

});

}






function guardarAux() {


    var dataString = 'cedulaAux=' + document.getElementById('cedula').value +
        '&nombreAux=' + document.getElementById('nombre').value +
        '&apellidoAux=' + document.getElementById('apellido').value +
        '&telefonoAux=' + document.getElementById('telefono').value +
        '&inputPasswordAux=' + document.getElementById('inputPassword').value+
        '&fech_nacAux='+document.getElementById('fech_nac').value+
        '&direccionAux='+document.getElementById('direccion').value+
        '&correoAux='+document.getElementById('correo').value;

    $.ajax({
        type: "POST",
        url: "php/ingresarAuxiliar.php",
        data: dataString,
        success: function (data) {
            showAuxiliar("gh");
            alert(data);
            //recuperando las variables

        },error: function (errorThrown) 
        {
           alert("Existe un error"+errorThrown);
        }
    

    });

}


function guardarHistoriaClinicaPasiente() {


    var dataString = 'cedulaHist=' + document.getElementById('cedula').value +
        '&nombreHist=' + document.getElementById('nombre').value +
        '&apellidoHist=' + document.getElementById('apellido').value +
        '&fech_nacHist='+document.getElementById('fech_nac').value+
        '&telefonoHist=' + document.getElementById('telefono').value +
        '&direccionHist='+document.getElementById('direccion').value+
        '&provinciaHist='+document.getElementById('provincia').value+
        '&cantonHist='+document.getElementById('canton').value+
        '&ecivilHist='+document.getElementById('ecivil').value+
        '&sexoHist='+document.getElementById('sexo').value+
        '&profesionHist='+document.getElementById('profesion').value+
        '&contrasenaHist='+document.getElementById('contrasena').value+
        '&responsableHist='+document.getElementById('responsable').value+
        '&observacionesHist='+document.getElementById('observaciones').value+
        '&correoHist='+document.getElementById('correo').value+
        '&responsableHist='+document.getElementById('responsable').value+
        '&observacionesHist='+document.getElementById('observaciones').value;
        
       
        /// historia clinica 


        
        

    $.ajax({
        type: "POST",
        url: "php/ingresarHistoriaClinicaPaciente.php",
        data: dataString,
        success: function (data) {
            showPaciente("fg");
            alert(data);
            //recuperando las variables

        },error: function (errorThrown) 
        {
           alert("Existe un error"+errorThrown);
        }
    

    });

}


function reservarCitaPorMedico()
{
    var dataString = 'cedulaReserva=' + document.getElementById('cedula').value +
        '&medicoReserva=' + document.getElementById('medico').value +
        '&fech_consulReserva=' + document.getElementById('fech_consul').value +
        '&horario_medReserva=' + document.getElementById('horario_med').value;

 

    $.ajax({
        type: "POST",
        url: "php/citaMedica.php",
        data: dataString,
        success: function (data) {
            show("sad");
            alert(data);
            //recuperando las variables
        },error: function (errorThrown) 
        {
           alert("Existe un error"+errorThrown);
        }
    
    });
}








function guardarHistoriaClinicaPasiente() {


    var dataString = 'cedulaHist=' + document.getElementById('cedula').value +
        '&nombreHist=' + document.getElementById('nombre').value +
        '&apellidoHist=' + document.getElementById('apellido').value +
        '&fech_nacHist='+document.getElementById('fech_nac').value+
        '&telefonoHist=' + document.getElementById('telefono').value +
        '&direccionHist='+document.getElementById('direccion').value+
        '&provinciaHist='+document.getElementById('provincia').value+
        '&cantonHist='+document.getElementById('canton').value+
        '&ecivilHist='+document.getElementById('ecivil').value+
        '&sexoHist='+document.getElementById('sexo').value+
        '&profesionHist='+document.getElementById('profesion').value+
        '&contrasenaHist='+document.getElementById('contrasena').value+
        '&responsableHist='+document.getElementById('responsable').value+
        '&observacionesHist='+document.getElementById('observaciones').value+
        '&correoHist='+document.getElementById('correo').value+
        '&responsableHist='+document.getElementById('responsable').value+
        '&observacionesHist='+document.getElementById('observaciones').value;
        
       
        /// historia clinica 


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

}


function reservarCitaPorMedico()
{
    var dataString = 'cedulaReserva=' + document.getElementById('cedula').value +
        '&medicoReserva=' + document.getElementById('medico').value +
      
        '&fech_consulReserva=' + document.getElementById('fech_consul').value +
        '&horario_medReserva=' + document.getElementById('horario_med').value;
      

    $.ajax({
        type: "POST",
        url: "php/citaMedica.php",
        data: dataString,
        success: function () {
            reservarCita("sad");
            alert(data);
            //recuperando las variables

        },error: function (errorThrown) 
        {
           alert("Existe un error"+errorThrown);
        }
    

    });

}


function reservarCitaPorPaciente()
{
    var dataString = 'cedulaReserva=' + document.getElementById('cedula').value +
        '&medicoReserva=' + document.getElementById('medico').value +
      
        '&fech_consulReserva=' + document.getElementById('fech_consul').value +
        '&horario_medReserva=' + document.getElementById('horario_med').value;
      

    $.ajax({
        type: "POST",
        url: "php/citaMedica.php",
        data: dataString,
        success: function (data) {
            showAgregarCita("sad");
            alert(data);
            //recuperando las variables

        },  error: function (errorThrown) 
        {
           alert(errorThrown);
        }

    });

}


