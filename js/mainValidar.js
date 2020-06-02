function validar(){
    
    var nombre = document.getElementsByName("nombre")[0].value;
    var email = document.getElementsByName("email")[0].value;
    var usuario = document.getElementsByName("usuario")[0].value;
    var clave = document.getElementsByName("clave")[0].value;
    var re = /\w+@\w+\.+[a-z]/;
    

    if(nombre=="" || email==""|| usuario==""|| clave==""){
        alert ("Todos los campos son obligatorios");
        return false;
    }else if(nombre.length>50){
        alert ("El nombre es demasiado largo");
        return false;
    }else if(usuario.length>30){
        alert ("El usuario es demasiado largo");
        return false;
    }else if(email.length>60){
        alert ("El email es demasiado largo");
        return false;
    }else if(clave.length>100){
        alert ("La clave es demasiado larga");
        return false;
    }

    //Evaluar el email con una expresion regular
    else if(!re.test(email)){
        alert ("El correo no es valido");
        return false;
    }
    return true;
    
}

//cambiar la clase si no se ha ingresado un dato
function revisar(elemento){
    if(elemento.value==""){
        elemento.className="error";
    }else{
        elemento.className="input"
    }
}

function validarForm(){
    var Tipo = document.getElementsByName("Tipo")[0].value;
    var Marca = document.getElementsByName("Marca")[0].value;
    var Modelo = document.getElementsByName("Modelo")[0].value;
    var numSerie = document.getElementsByName("NumSerie")[0].value;
    var Calibre = document.getElementsByName("Calibre")[0].value;

    if(Tipo=="" || Marca==""|| Modelo==""|| numSerie=="" || Calibre==""){
        alertify.error("Todos los campos son obligatorios");
        return false;
    }
    return true;

}
