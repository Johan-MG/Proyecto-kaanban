var tema = document.getElementById('siuu').value;
myForm.addEventListener("submit", (e) =>
{
    e.preventDefault();
});
//4 números aleatorios sin repeticion
numero1 =aleatorio();
numero2 =0;
numero3 =0;
numero4 =0;
do{numero2=aleatorio();}
while (numero1==numero2)
do{numero3=aleatorio();}
while (numero1==numero3||numero2==numero3)
do{numero4=aleatorio();}
while (numero1==numero4||numero2==numero4||numero3==numero4)
//Genera un número aleatorio
function aleatorio()
{numero = Math.floor((Math.random() * 4) + 1);
return numero;}
//Colocar datos en la pagina web
function formato(data)
{
    
    valor=$(data).find('Palabra').text();
    op1=$(data).find('string:nth-child('+numero1+')').text();
    op2=$(data).find('string:nth-child('+numero2+')').text();
    op3=$(data).find('string:nth-child('+numero3+')').text();
    op4=$(data).find('string:nth-child('+numero4+')').text();
    console.log(valor);
    document.querySelector('#pal').append(valor);
    document.querySelector('#id1').append(op1);
    document.querySelector('#id2').append(op2);
    document.querySelector('#id3').append(op3);
    document.querySelector('#id4').append(op4);
}
//Consumir servicio web
function cargardatos()
{
    try
    {
        $.ajax
        ({
            url: `https://kaanbal.azurewebsites.net/Conexion.asmx/JSON?Tema=${tema}`,
            type: 'GET',
            dataType: 'xml',        
            success: function(msg) 
            {
                formato(msg)   
            },
            error: function(jqXmlHttpRequest, textStatus, errorThrown) { alert("Error leyendo datos."); }
        });
    } 
    catch (err) 
    {
        alert(err);
    }
}
//validar opción seleccionada
function val(opc)
{
    //validar opción correcta
    correcto=0;
    if(numero1==1)
    {correcto=1;aux='id1';}else
    {
        if(numero2==1)
        {correcto=2;aux='id2';}else
        {
            if(numero3==1)
            {correcto=3;aux='id3';}else
            {
                correcto=4;aux='id4';
            }
        }
    }
    elem = document.getElementById(aux);
    if (opc==correcto)
    {
        elem.style.background = 'blue';
        document.querySelector('#res').append("Respuesta Correcta");
        setTimeout(function(){
            location.reload();
        }, 3000);
    }
    else
    {
        elem.style.background = 'red';
        document.querySelector('#res').append("Respuesta Incorrecta");
        setTimeout(function(){
            location.reload();
        }, 3000);
    }
    //Comparar con opción seleccionada
    
}