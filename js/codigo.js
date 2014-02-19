$(document).on("ready",ini);

function ini()
{
	$("#btnConsultar").on("click",consultarEstudiantes);
}

function consultarEstudiantes()
{
    try
    {
        var strHtml = "";
		$.ajax({
				global: false,
				dataType: "html",
				async: false,
                type: "POST",
                url: $("#form").attr('action'),
                data: $("#form").serialize(),
            }).done(function (resultado) {
            	var datosRecibidos = JSON.parse(resultado);

                var lista = "";
                $.each( datosRecibidos, function( key, value ) {
                        lista += "<li><div id='avatarUs'><img src='imagenes/" + value.foto + "' width='60' ></div>";

                        lista += "<div id='infoUs'>";
                        lista += "Alumno: " + value.nombre + "<br>";
                        lista += "Documento: " + value.documento + "<br>";
                        lista += "Grupo: " + value.grupo + "<br>";
                        lista += "Foto: " + value.foto;
                        lista += "Otra cosa!!";
                        lista += "</div>";
                        lista += "</li>";
                });
                $("#listaDatos").html(lista);
                $("#listaDatos").listview().listview('refresh');
        });
    }
    catch(ex)
    {
        alert("Error de datos!!");
    }
}