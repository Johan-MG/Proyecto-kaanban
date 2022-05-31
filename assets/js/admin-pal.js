var Id = document.getElementById('id');
var Palabra = document.getElementById('palabra');
var Traduccion = document.getElementById('traduccion');
var Idioma = document.getElementById('idioma');
var Tema = document.getElementById('tema');
var Rareza = document.getElementById('rareza');

myForm.addEventListener("submit", (e) =>
{
    e.preventDefault();
});

function insertar(){
    $.ajax({
        type: 'GET',
        url: `http://kaanbal.azurewebsites.net/Conexion.asmx/insPalabra?palabra=${Palabra.value}&traduccion=${Traduccion.value}&rareza=${Rareza.value}&idioma=${Idioma.value}&tema=${Tema.value}`,
        dataType: 'xml'
    }).done((data) => {
        switch($(data).find('Bandera').text()) {
            case '1':
                alert("¡Registro exitoso!");
            break;
            case '-1':
                alert("El tema no existe");
            break;
            case '0':
                alert("La palabra ya existe");
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
        url: `http://kaanbal.azurewebsites.net/Conexion.asmx/updPalabra?id=${Id.value}&palabra=${Palabra.value}&traduccion=${Traduccion.value}&rareza=${Rareza.value}&idioma=${Idioma.value}&tema=${Tema.value}`,
        dataType: 'xml'
    }).done((data) => {
        switch($(data).find('Bandera').text()) {
            case '1':
                alert("¡Modificación exitosa!");
            break;
            case '-1':
                alert("El tema no existe");
            break;
            case '0':
                alert("La palabra ya existe");
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
        url: `http://kaanbal.azurewebsites.net/Conexion.asmx/DelPalabra?id=${Id}`,
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