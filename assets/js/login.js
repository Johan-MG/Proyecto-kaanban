var Correo = document.getElementById('correo');
var Contrasena = document.getElementById('contrasena');
const myForm = document.getElementById('myForm');
var bandera = false;

var usuario = {
    Nombre:"",
    Rol: ""
};

//myForm.onsubmit = function(){Enviar};

$('#incorrecto').hide();

myForm.addEventListener("submit", (e) =>{
    acceso();
    if(bandera == true){
        document.getElementById('Usuario').value = usuario.Nombre;
        document.getElementById('Rol').value = usuario.Rol;
        console.log("Entre");
    }else{
        e.preventDefault();
        console.log(bandera);
        console.log("no entre");
    }
    myForm.sub
});

$("#send").on("click" ,function()
{
    acceso();
    setTimeout(function(){
        $("#submit").click();
    },500);
    
});

function acceso(){
    $.ajax({
        type: 'GET',
        url: `http://kaanbal.azurewebsites.net/Conexion.asmx/Acceso?correo=${Correo.value}&contrasena=${Contrasena.value}`,
        dataType: 'xml'
    }).done((data) => {
        if($(data).find('Bandera').text() == '1'){
            usuario.Nombre = $(data).find('Nombre').text();
            usuario.Rol = $(data).find('Rol').text();
            //console.log($(data).find('Nombre').text());
            //console.log($(data).find('Rol').text());
            //window.location.href = "mainmenu.html";
            bandera = true;
        }else{
            $('#incorrecto').hide();
            setTimeout(function(){
                $('#incorrecto').show();
            },500);
            bandera = false;
        }
        console.log($(data).find('Bandera').text());
    }) 
}

/* function Enviar(){
    if(acceso()){
        document.getElementById('Usuario').value = "admin";
        document.getElementById('Rol').value = "admin";
    }else{
       
    }
} */