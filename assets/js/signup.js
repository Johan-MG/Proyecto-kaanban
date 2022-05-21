var Nombre = document.getElementById('nombre');
var Correo = document.getElementById('correo');
var Paterno = document.getElementById('paterno');
var Materno = document.getElementById('materno');
var Contrasena = document.getElementById('contrasena');
var Contrasenab = document.getElementById('contrasena-b');
const myForm = document.getElementById('myForm');
const Tipo = 3;
myForm.addEventListener("submit", (e) =>{
    e.preventDefault();
    if (Contrasena != Contrasenab) {
        alert("Las contraseñas deben coincidir");
    } else {
        registro(); 
    }
});

function registro(){
    $.ajax({
        type: 'GET',
        url: `http://kaanbal.azurewebsites.net/Conexion.asmx/insUsuario?nombre=${Nombre.value}&contrasena=${Contrasena.value}&correo=${Correo.value}&ap_pat=${Paterno.value}&ap_mat=${Materno.value}&tip_id=${Tipo}`,
        dataType: 'xml'
    }).done((data) => {
        switch($(data).find('Bandera').text()) {
            case '1':
                alert("Registro exitoso. ¡Bienvenido!");
                window.location.href = "mainmenu.html";
            break;
            case '-1':
                alert("El correo ya existe");
            break;
            default: 
            alert("Registro incorrecto");
        }
        console.log($(data).find('Bandera').text());
    }) 
}