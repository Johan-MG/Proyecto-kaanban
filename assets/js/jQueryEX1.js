/*$.ajax
({
    type: "POST",
    contentType: "application/json; charset=utf-8",
    url: "http://kaanbal.azurewebsites.net/Conexion.asmx",
    dataType: "json",
    data: "Hogar",
});
*/

// Procesar resultados del webservice
function webServiceResult(data)
{
    $("#pal").append(data.Palabra);
    alert("Exito");
}
// Llamada al webservice
function callWebService()
{
    try
    { 
        $.ajax
        ({
            url: "https://kaanbal.azurewebsites.net/Conexion.asmx?op=JSON",
            data:"Hogar",
            type: "get",
            async: true,
            contentType: "text/json; charset=utf-8",
            dataType: "json",        
            success: function(msg) { webServiceResult(msg) },
            error: function(jqXmlHttpRequest, textStatus, errorThrown) { alert("Error leyendo datos."); }
        });
    } 
    catch (err) 
    {
        alert(err);
    }
}
