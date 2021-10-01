function verificarPassword() {
    var inputName = document.getElementById("password").value;
    if (inputName.length >= 4) {
         console.log("Muy bien");
    }
    else {
        alert("Debes escribir mas de 8 caracteres");
    }
}