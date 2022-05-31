var Id = document.getElementById('id');
var Nombre = document.getElementById('nombre');
var Correo = document.getElementById('correo');
var Paterno = document.getElementById('paterno');
var Materno = document.getElementById('materno');
var Contrasena = document.getElementById('contrasena');

myForm.addEventListener("submit", (e) =>
{
    e.preventDefault();
});

function insertar(){
    $.ajax({
        type: 'GET',
        url: `http://kaanbal.azurewebsites.net/Conexion.asmx/insUsuario?nombre=${Nombre.value}&contrasena=${Contrasena.value}&correo=${Correo.value}&ap_pat=${Paterno.value}&ap_mat=${Materno.value}&tip_id=${Tipo}`,
        dataType: 'xml'
    }).done((data) => {
        switch($(data).find('Bandera').text()) {
            case '1':
                alert("¡Registro exitoso!");
            break;
            case '-1':
                alert("El correo ya existe");
            break;
            default: 
            alert("Inserción incorrecta, verifique los datos ingresados");
        }
        console.log($(data).find('Bandera').text());
    }) 
}

function modificar(){
    $.ajax({
        type: 'GET',
        url: `http://kaanbal.azurewebsites.net/Conexion.asmx/updUsuario?id=${Id.value}&nombre=${Nombre.value}&contrasena=${Contrasena.value}&correo=${Correo.value}&ap_pat=${Paterno.value}&ap_mat=${Materno.value}&tip_id=${Tipo}`,
        dataType: 'xml'
    }).done((data) => {
        switch($(data).find('Bandera').text()) {
            case '1':
                alert("¡Modificación exitosa!");
            break;
            case '-1':
                alert("El correo ya existe");
            break;
            default: 
            alert("Modificación incorrecta, verifique los datos ingresados");
        }
        console.log($(data).find('Bandera').text());
    }) 
}

function eliminar(){
    $.ajax({
        type: 'GET',
        url: `http://kaanbal.azurewebsites.net/Conexion.asmx/DelUsuario?id=${Id.value}`,
        dataType: 'xml'
    }).done((data) => {
        switch($(data).find('Bandera').text()) {
            case '1':
                alert("¡Eliminación exitosa!");
            break;
            case '-1':
                alert("La clave no existe");
            break;
            default: 
            alert("Eliminación incorrecta, verifique los datos ingresados");
        }
        console.log($(data).find('Bandera').text());
    }) 
}