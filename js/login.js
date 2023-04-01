function mostrar(){
    var key = document.getElementById("pass");
    var ocultar = document.getElementById("ocultar");
    var mostrar = document.getElementById("ver");

    if(key.type == "password"){
        key.type = "text";
        ocultar.style.display = "inline";
        mostrar.style.display = "none";
    }
}

function ocultar(){
    var key = document.getElementById("pass");
    var ocultar = document.getElementById("ocultar");
    var mostrar = document.getElementById("ver");

    if(key.type == "text"){
        key.type = "password";
        ocultar.style.display = "none";
        mostrar.style.display = "inline";
    }
}