var tema = document.getElementById('tema');
//Colocar datos en la pagina web
valor="";
res="";
function formato(data)
{
    
    valor=$(data).find('Palabra').text();
    document.querySelector('#pal').append(valor);
    res=$(data).find('string:nth-child(1)').text();
}
//Consumir servicio web
function cargardatos()
{
    try
    {
        $.ajax
        ({
            url: `https://kaanbal.azurewebsites.net/Conexion.asmx/JSON?Tema=Hogar`,
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
function val()
{
    //validar opción correcta
    var trad = document.getElementById('trad');
    traduccion=trad.value;
    traduccion=(traduccion.toLowerCase()).trim();
    aux=false;
    console.log(traduccion);
    console.log(res);
    i=0;
    console.log(traduccion.length);
    while(traduccion.length>=i&&aux==false)
    {
        if(traduccion.charAt(i)!=res.charAt(i))
        {
            aux=true;
        }
        i++;
    }
    if(aux==false)
    {alert("Respuesta correcta");}
    else
    {alert("Respuesta incorrecta");
    window.location.href = "exercise1.html";}
    
}