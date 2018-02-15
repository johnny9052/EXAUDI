/* Funciones jQuery */
$(window).on("load", function (e) {
    list();
});


function list() {
    Execute(scanInfo('listNoTable'), 'Parameterized/CtlNew', '', 'buildListNews(info);', 'System/');
}


function buildListNews(info) {
    console.log(info);

    var listado="" ;

    if (info.length > 0) {
        for (f = 0; f < info.length; f++) {
            var fecha = info[f].fecha;
            var titulo_noticia = info[f].titulo_noticia;
            var descripcion = info[f].descripcion;
            var ruta_foto = info[f].ruta_foto;
            var ruta_video = info[f].ruta_video;
            var fechaLarga = Date.parse(fecha).toString("MMMM yyyy");
            listado = listado + "<div class='row'><div class='col s12 m1'></div><div class='col s12 m8'><div class='icon-block'><div> <hr style='color: #DFDFDF;' /></div><label class='textBoldHomeGray'>";
            listado = listado + fecha + "</label><br><p class='light textLightGray'>";
            listado = listado + titulo_noticia + "</p></div></div><div class='col s12 m1'></div></div>"                                    
        }
        
        $("#lstNoticias").html(listado);
        
    }
}




