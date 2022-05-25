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
    
    valor=$(data).find('Expresion').text();
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
            url: `https://kaanbal.azurewebsites.net/Conexion.asmx/Expresion`,
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
    {correcto=1;}else
    {
        if(numero2==1)
        {correcto=2;}else
        {
            if(numero3==1)
            {correcto=3;}else
            {
                correcto=4;
            }
        }
    }
    if (opc==correcto)
    {
        alert("Respuesta Correcta");
        reload()
    }
    else
    {
        alert("Respuesta Incorrecta");
    }
    //Comparar con opción seleccionada
    
}