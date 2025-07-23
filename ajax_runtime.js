function nuevoAjax(){
    var xmlhttp=false;
    try {
    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
    try {
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (E) {
    xmlhttp = false;
    }
    }
    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
    xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

function enviarFormulario(url, formid, divrespuesta){
        var Formulario = document.getElementById(formid);
        var longitudFormulario = Formulario.elements.length;
        var cadenaFormulario = "";
        var sepCampos;
        sepCampos = "";
        for (var i=0; i <= Formulario.elements.length-1;i++) {
            cadenaFormulario += sepCampos+Formulario.elements[i].name+'='+encodeURI(Formulario.elements[i].value);
            sepCampos="&";
    }
    peticion=nuevoAjax();
    peticion.open("POST", url, true);
    peticion.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=ISO-8859-1');
    peticion.send(cadenaFormulario);
    peticion.onreadystatechange = function() {
          if (peticion.readyState == 4 && (peticion.status == 200 || window.location.href.indexOf ("http") == - 1)){
                document.getElementById(divrespuesta).innerHTML = peticion.responseText;
          }
    }
}