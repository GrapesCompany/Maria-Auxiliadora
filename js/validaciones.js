/////////////////////////////////SENSUALES VALIDACIONES BY DANNY EL WOLF USCA :V ////////////////////////////////////////////////////////

//VALIDACION DE LA CEDULA Y LA ACCION DE PERSONAL
function validarFormulario() {

    var varNumeroAccion = document.getElementById('txtNumeroAccion').value;         //onkeyup='this.value=NumText(this.value)' onkeypress='mayus(this);'  onBlur='ponerMayusculas(this)'
    var varCedula = document.getElementById('txtCedula').value;                     //onkeyup='this.value=NumText2(this.value)'

    if (varNumeroAccion == null || varNumeroAccion.length == 0 || /^\s+$/.test(varNumeroAccion) || /\s/.test(varNumeroAccion)) {
        $("#msgText").html("El campo Numero De Accion de Personal no debe ir vacío o lleno de solamente espacios en blanco");
        txtNumeroAccion.focus();
        return false;
    }
    if (varCedula != null || varCedula.length > 0) {
        if (validar(varCedula)) {
        } else {
            $("#msgText").html("Ingrese una cédula válida");
            txtCedula.focus();
            return false;
        }
    } else {
        $("#msgText").html("El campo Cédula no debe ir vacío o lleno de solamente espacios en blanco");
        txtCedula.focus();
        return false;
    }


    return true;
}

function validar(varCedula) {
    var cad = varCedula;
    var total = 0;
    var longitud = cad.length;
    var longcheck = longitud - 1;
    if (cad !== "" && longitud === 10) {
        for (i = 0; i < longcheck; i++) {
            if (i % 2 === 0) {
                var aux = cad.charAt(i) * 2;
                if (aux > 9)
                    aux -= 9;
                total += aux;
            } else {
                total += parseInt(cad.charAt(i)); // parseInt o concatenará en lugar de sumar
            }
        }
        total = total % 10 ? 10 - total % 10 : 0;

        if (cad.charAt(longitud - 1) == total) {
            return true;
        } else {
            return false;
        }
    }
}

//VALIDACION DE LA SEGUNDA PARTE DEL FORMULARIO DE ACCION DE PERSONAL
function validarFormulario2() {
    var varResolucion = document.getElementById('txtResolucion').value;         //onkeyup='this.value=NumText(this.value)' onkeypress='mayus(this);'  onBlur='ponerMayusculas(this)'
    var varFechaRig = document.getElementById('txtFecha').value;
    var varExpicacion = document.getElementById('txtExplicacion').value;
    var varTipoMovimiento = document.getElementById('txtTipoMovimiento').value;
    var varDependencia = document.getElementById('txtDenpendencia').value;      //onBlur='ponerMayusculas(this)' onkeypress='mayus(this);' onkeyup='this.value=NumText1(this.value)'
    var varLugarTrabajo = document.getElementById('txtLugarTrabajo').value;
    var varRemuneracion = document.getElementById('txtRemuneracion').value;
    var varRegimen = document.getElementById('txtRegimen').value;
    var varPartidaIn = document.getElementById('txtPartidaIn').value;
    var varPartidaPres = document.getElementById('txtPartidaPre').value;        //onkeyup='this.value=NumText2(this.value)'
    var varPuesto = document.getElementById('txtPuesto').value;                 //onBlur='ponerMayusculas(this)' onkeypress='mayus(this);' onkeyup='this.value=NumText1(this.value)'
    fncBtnGuardarC();

    if (varResolucion == null || varResolucion.length == 0 || /^\s+$/.test(varResolucion)) {
        $("#msgText").html("Completar el campo obligatorio Resolución");
        _fncBtnGuardarCKO();
        txtResolucion.focus();
        return false;

    }
    if (varFechaRig == null || varFechaRig.length == 0 || /^\s+$/.test(varFechaRig)) {
        $("#msgText").html("Completar el campo obligatorio Fecha");
        _fncBtnGuardarCKO();
        txtFecha.focus();
        return false;
    }
    if (varExpicacion == null || varExpicacion.length == 0 || /^\s+$/.test(varExpicacion)) {
        $("#msgText").html("Completar el campo obligatorio Explicación");
        _fncBtnGuardarCKO();
        txtExplicacion.focus();
        return false;
    }
    if (varTipoMovimiento == null || varTipoMovimiento.length == 0 || /^\s+$/.test(varTipoMovimiento)) {
        $("#msgText").html("Completar el campo obligatorio Explicación");
        _fncBtnGuardarCKO();
        txtTipoMovimiento.focus();
        return false;
    }
    if (varDependencia == null || varDependencia.length == 0 || /^\s+$/.test(varDependencia)) {
        $("#msgText").html("Completar el campo obligatorio Dependencia");
        _fncBtnGuardarCKO();
        txtDenpendencia.focus();
        return false;
    }
    if (varLugarTrabajo == null || varLugarTrabajo.length == 0 || /^\s+$/.test(varLugarTrabajo)) {
        $("#msgText").html("Completar el campo obligatorio Lugar de Trabajo");
        _fncBtnGuardarCKO();
        txtLugarTrabajo.focus();
        return false;
    }
    if (varRemuneracion == null || varRemuneracion.length == 0 || /^\s+$/.test(varRemuneracion)) {
        $("#msgText").html("Completar el campo obligatorio Remuneración");
        _fncBtnGuardarCKO();
        txtRemuneracion.focus();
        return false;
    }
    if (varRegimen == null || varRegimen.length == 0 || /^\s+$/.test(varRegimen)) {
        $("#msgText").html("Completar el campo obligatorio Régimen");
        _fncBtnGuardarCKO();
        txtRegimen.focus();
        return false;
    }

    if (varPartidaIn == null || varPartidaIn.length == 0 || /^\s+$/.test(varPartidaIn)) {
        $("#msgText").html("Completar el campo obligatorio Partida Individual");
        _fncBtnGuardarCKO();
        txtPartidaIn.focus();
        return false;
    }
    if (varPartidaPres == null || varPartidaPres.length == 0 || /^\s+$/.test(txtPartidaPre)) {
        $("#msgText").html("Completar el campo obligatorio Partida Presupuestaria");
        _fncBtnGuardarCKO();
        txtPartidaPre.focus();
        return false;
    }
    if (varPuesto == null || varPuesto.length == 0 || /^\s+$/.test(varPuesto)) {
        $("#msgText").html("Completar el campo obligatorio Puesto");
        _fncBtnGuardarCKO();
        txtPuesto.focus();
        return false;
    }
    _fncBtnGuardarCOK();
    return true;

}

//------ VALIDACION DEL NUMERO DE ACCION DE PERSONAL ----------
function validarFormularioModificar() {
    fncBtnBuscar();
    var varNumeroAccion = document.getElementById('txtNumeroAccion').value;     //onkeyup='this.value=NumText(this.value)' onkeypress='mayus(this);'  onBlur='ponerMayusculas(this)'

    if (varNumeroAccion == null || varNumeroAccion.length == 0 || /^\s+$/.test(varNumeroAccion) || /\s/.test(varNumeroAccion)) {
        _fncBtnBuscarKO();
        $("#msgText").html("Completar el campo Número de Acción de Personal");
        txtNumeroAccion.focus();
        return false;
    }
    _fncBtnBuscarOK();
    return true;
}

//------- VALIDACION DEL CAMPO BUSCAR DE LA ACCION DE PERSONAL ------
function validarFormularioBuscarADP() {
    var varBuscar = document.getElementById('txtBuscar').value;     //onkeyup='this.value=NumText1(this.value)' onkeypress='mayus(this);'  onBlur='ponerMayusculas(this)'

    if (varBuscar == null || varBuscar.length == 0 || /^\s+$/.test(varBuscar) || /\s/.test(varBuscar)) {
        $("#msgText").html("El campo a Buscar no debe ir vacío o lleno de solamente espacios en blanco");
        txtBuscar.focus();
        return false;
    }
    return true;
}
//--------- VALIDACION DEL CAMPO BUSCAR POR CEDULA DE LOS REPORTES POR PERSONA
function validarFormularioBuscarADP() {

    var varCedula = document.getElementById('txtBuscar').value;     //onkeyup='this.value=NumText2(this.value)'
    if (varCedula != null || varCedula.length > 0) {
        if (validar(varCedula)) {
        } else {
            $("#msgText").html("Ingrese una cédula válida");
            txtBuscar.focus();
            return false;
        }
    } else {
        $("#msgText").html("El campo Cédula no debe ir vacío o lleno de solamente espacios en blanco");
        txtBuscar.focus();
        return false;
    }
    return true;
}


/*********************************** */
//Solo Letras--------------------  onkeyup='this.value=soloLetras(this.value)'
function soloLetras(string) {//solo letras
    var out = '';
    //Se añaden las letras validas
    var filtro = 'abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ ';//Caracteres validos

    for (var i = 0; i < string.length; i++)
        if (filtro.indexOf(string.charAt(i)) != -1)
            out += string.charAt(i);
    return out;
}
//Solo Numeros--------------------  onkeyup='this.value=soloNumeros(this.value)'
function soloNumeros(string) {//solo numeros
    var out = '';
    //Se añaden las letras validas
    var filtro = '0123456789';//Caracteres validos

    for (var i = 0; i < string.length; i++)
        if (filtro.indexOf(string.charAt(i)) != -1)
            out += string.charAt(i);
    return out;
}
//Validar la cedula
function validarCedula(varCedula) {
    var cad = varCedula;
    var total = 0;
    var longitud = cad.length;
    var longcheck = longitud - 1;
    if (cad !== "" && longitud === 10) {
        for (i = 0; i < longcheck; i++) {
            if (i % 2 === 0) {
                var aux = cad.charAt(i) * 2;
                if (aux > 9)
                    aux -= 9;
                total += aux;
            } else {
                total += parseInt(cad.charAt(i)); // parseInt o concatenará en lugar de sumar
            }
        }
        total = total % 10 ? 10 - total % 10 : 0;

        if (cad.charAt(longitud - 1) == total) {
            alert("La cedula es correcta");
            return true;
        } else {
            alert("La cedula es incorrecta");
            return false;
        }
    }
}
/*********************************** */






























//CONVERTIR CADENAS A MAYUSCULAS O MINUSCULAS
function ponerMayusculas(parametro) {           //-----------------  onBlur='ponerMayusculas(this)'
    parametro.value = parametro.value.toUpperCase();
}
function mayus(teclapulsada) {                  //------------------  onkeypress='mayus(this);'
    teclapulsada.value = teclapulsada.value.toUpperCase();
}


//VERIFICAR SI EXISTEN CARACTERES ESPECIALES EXEPTUANDO EL ESPACIO Y EL PUNTO  --------------------  onkeyup='this.value=NumText1(this.value)'
function NumText1(string) {//solo letras y numeros
    var out = '';
    //Se añaden las letras validas
    var filtro = 'abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ1234567890. ';//Caracteres validos

    for (var i = 0; i < string.length; i++)
        if (filtro.indexOf(string.charAt(i)) != -1)
            out += string.charAt(i);
    return out;
}
//VERIFICAR SI EXISTEN CARACTERES ESPECIALES EXEPTUANDO NUMEROS  --------------------  onkeyup='this.value=NumText2(this.value)'
function NumText2(string) {//solo letras y numeros
    var out = '';
    //Se añaden las letras validas
    var filtro = '1234567890';//Caracteres validos

    for (var i = 0; i < string.length; i++)
        if (filtro.indexOf(string.charAt(i)) != -1)
            out += string.charAt(i);
    return out;
}