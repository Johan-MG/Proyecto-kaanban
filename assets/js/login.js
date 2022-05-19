var Correo = document.getElementById('correo');
var Contrasena = document.getElementById('contrasena');
const myForm = document.getElementById('myForm');

$('#incorrecto').hide();

myForm.addEventListener("submit", (e) =>{
    e.preventDefault();
    acceso();
});

function acceso(){
    $.ajax({
        type: 'GET',
        url: `http://kaanbal.azurewebsites.net/Conexion.asmx/Acceso?correo=${Correo.value}&contrasena=${Contrasena.value}`,
        dataType: 'xml'
    }).done((data) => {
        if($(data).find('Bandera').text() == '1'){
            window.location.href = "mainmenu.html";
        }else{
            $('#incorrecto').hide();
            setTimeout(function(){
                $('#incorrecto').show();
            },500);
            
        }
        console.log($(data).find('Bandera').text());
    }) 
}