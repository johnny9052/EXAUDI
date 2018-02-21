/* Funciones jQuery */
$(window).on("load", function (e) {
    list();
});


var totalRegistros = 0;
var totalPaginacion = 0;
var noticias;

function list() {
    Execute(scanInfo('listNoTable'), 'Parameterized/CtlNew', '', 'buildListNews(info);', 'System/');
}


function buildListNews(info) {
    console.log(info);

    var listado = "";

    if (info.length > 0) {

        totalRegistros = info.length;
        totalPaginacion = Math.ceil(totalRegistros / 5);
        noticias = info;

        var totalIteracion = (info.length > 5) ? 5 : info.length;

        for (f = 0; f < totalIteracion; f++) {

            var id = info[f].id;
            var fecha = info[f].fecha;
            var fechaOk = new Date(fecha);
            var titulo_noticia = info[f].titulo_noticia;
            var meses = new Array("ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE");
            var fechaLarga = fechaOk.getDate() + " DE " + meses[fechaOk.getMonth()] + " DE " + fechaOk.getFullYear();


            listado = listado + "<div class='row' onclick='cargarNoticia(" + id + ");'><a class='modal-trigger seleccionable' href='#modalNoticia'><div class='col s12 m1'></div><div class='col s12 m8'><div class='icon-block'><div> <hr style='color: #DFDFDF;' /></div><label class='textBoldHomeGray'>";
            listado = listado + fechaLarga + "</label><br><p class='light textLightGray'>";
            listado = listado + titulo_noticia + "</p></div></div><div class='col s12 m1'></div></a></div>";

        }

        $("#lstNoticias").html(listado);
        configurarPaginador(1);
    } else {
        listado = listado + "<div class='row'><div class='col s12 m1'></div><div class='col s12 m8'><div class='icon-block'><div> <hr style='color: #DFDFDF;' /></div><label>Informacion no encontrada</label><br><p class='light'>No se encuentran noticias para mostrar</p></div></div><div class='col s12 m1'></div></div>";
        $("#lstNoticias").html(listado);
    }
}



function configurarPaginador(posSeleccionada) {

    var paginador = "";

    for (var x = 1; x <= totalPaginacion; x++) {
        paginador = paginador + "<li id='pag" + (x - 1) + "' class='" + ((posSeleccionada === x) ? "verdeExaudi" : "waves-effect") + " pag' onclick='repaginar(" + (x - 1) + ");'><a>" + x + "</a></li>";
    }

    $('#segmentoPaginador').html(paginador);
}


function repaginar(posSeleccionada) {

    showLoadBar(true);

    var listado = "";

    $(".pag").removeClass("verdeExaudi");
    $(".pag").addClass("waves-effect");
    $("#pag" + posSeleccionada).addClass("verdeExaudi");

    var posInicial = posSeleccionada * 5;
    var posFinal = ((posInicial + 5) > totalRegistros) ? totalRegistros : (posInicial + 5);

    for (f = posInicial; f <= posFinal - 1; f++) {

        var id = noticias[f].id;
        var fecha = noticias[f].fecha;
        var fechaOk = new Date(fecha);
        var titulo_noticia = noticias[f].titulo_noticia;
        var meses = new Array("ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE");
        var fechaLarga = fechaOk.getDate() + " DE " + meses[fechaOk.getMonth()] + " DE " + fechaOk.getFullYear();


        listado = listado + "<div class='row' onclick='cargarNoticia(" + id + ");'><a class='modal-trigger seleccionable' href='#modalNoticia'><div class='col s12 m1'></div><div class='col s12 m8'><div class='icon-block'><div> <hr style='color: #DFDFDF;' /></div><label class='textBoldHomeGray'>";
        listado = listado + fechaLarga + "</label><br><p class='light textLightGray'>";
        listado = listado + titulo_noticia + "</p></div></div><div class='col s12 m1'></div></a></div>"

    }


    $("#lstNoticias").html(listado);

    showLoadBar(false);

}





function cargarNoticia(id) {
    $("#txtId").val(id);
    /*Form para el pdf*/
    $("#idPDF").val(id);
    
    Execute(scanInfo('search', true, 'modalNoticia'), 'Parameterized/CtlNew', '', 'mostrarNoticia(info);', 'System/');
}


function mostrarNoticia(info) {

    if (info[0].foto !== "") {
        $("#imgNoticia").fadeIn("slow");
        $("#imgNoticia").attr("src", info[0].foto);
    } else {
        $("#imgNoticia").hide();
    }
    
    if (info[0].video !== "") {
        $("#urlVideo").attr("href", info[0].video)
    }



    $("#lblTitulo").html(info[0].titulo);

    /*Se reemplaza cualquier enter que se encuentre por <br>*/
    var description = info[0].descripcion.replace(/\n/ig, "<br>");
    description = description.replace("\r", "<br>");

    $("#lblDescripcion").html(description);

}





function generarPdf() {
    document.getElementById('frmPDF').submit();
}
