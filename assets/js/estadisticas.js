var intentos, aciertos, total_int = 0, total_aci = 0;
var intentos_global = document.getElementById('intentos_global');
var aciertos_global = document.getElementById('correctas_global');
var intentos_computacion = document.getElementById('computacion_intentos');
var aciertos_computacion = document.getElementById('computacion_aciertos');
var intentos_botanica = document.getElementById('botanica_intentos');
var aciertos_botanica = document.getElementById('botanica_aciertos');
var intentos_astrologia = document.getElementById('astrologia_intentos');
var aciertos_astrologia = document.getElementById('astrologia_aciertos');
var intentos_escuela = document.getElementById('escuela_intentos');
var aciertos_escuela = document.getElementById('escuela_aciertos');
var intentos_hogar = document.getElementById('hogar_intentos');
var aciertos_hogar = document.getElementById('hogar_aciertos');
var intentos_clima = document.getElementById('clima_intentos');
var aciertos_clima = document.getElementById('clima_aciertos');
var Correo = document.getElementById('Correo').value;

function formato(data)
{
    intentos = $(data).find('intentos').text();
    aciertos = $(data).find('aciertos').text();
    intentos.split();
    aciertos.split();
    for(let i of intentos) total_int+=parseInt(i,10);
    for(let i of aciertos) total_aci+=parseInt(i,10);
    //console.log(total);
    intentos_global.textContent = total_int;
    aciertos_global.textContent = total_aci;
    intentos_computacion.textContent = intentos[0];
    aciertos_computacion.textContent = aciertos[0];
    intentos_botanica.textContent = intentos[1];
    aciertos_botanica.textContent = aciertos[1];
    intentos_astrologia.textContent = intentos[2];
    aciertos_astrologia.textContent = aciertos[2];
    intentos_escuela.textContent = intentos[3];
    aciertos_escuela.textContent = aciertos[3];
    intentos_hogar.textContent = intentos[4];
    aciertos_hogar.textContent = aciertos[4];
    intentos_clima.textContent = intentos[5];
    aciertos_clima.textContent = aciertos[5];
    /* document.querySelector('#pal').append(valor);
    document.querySelector('#id1').append(op1);
    document.querySelector('#id2').append(op2);
    document.querySelector('#id3').append(op3);
    document.querySelector('#id4').append(op4);  */
}
//Consumir servicio web
function cargardatos()
{
    try
    {
        $.ajax
        ({
            url: `https://kaanbal.azurewebsites.net/Conexion.asmx/Estadisticas?correo=${Correo}`,
            type: 'GET',
            dataType: 'xml',        
            success: function(msg) 
            {
                formato(msg)   
                //console.log(msg);
            },
            error: function(jqXmlHttpRequest, textStatus, errorThrown) { alert("Error leyendo datos."); }
        });
    } 
    catch (err) 
    {
        alert(err);
    }
}

cargardatos();