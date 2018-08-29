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
            //alert("La cedula es correcta");
            return true;
        } else {
            //alert("La cedula es incorrecta");
            return false;
        }
    }
}


//Validar correo electronico
function validateMail(idMail) {
    //Creamos un objeto 
    var valueForm = idMail;
    // Patron para el correo
    var patron = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    if (valueForm.search(patron) == 0) {
        //Mail correcto
        return true;
    }
    //Mail incorrecto
    return false;
}
/*********************************** */