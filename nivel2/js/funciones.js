function validar() {

    nombre = document.getElementById("nombre").value;
    correo = document.getElementById("correo").value;
    phone = document.getElementById("telefono").value;
    campus = document.getElementById("campus").value;
    if (nombre === "" || correo === "" || phone === "" || campus === "") {
        alert("Verifique que no tengas campos en blanco")
    }

}