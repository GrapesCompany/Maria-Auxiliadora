 function showMedico(str) {
  str=" ";
    if (str.length == 0) { 
        document.getElementById("div_nuevomedico").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("div_nuevomedico").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "nuevo_medico.php?q="+str, true);
        xmlhttp.send();
    }
}
 