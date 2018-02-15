/* Funciones jQuery */
$(window).on("load", function (e) {
    list();
});


function list() {
    Execute(scanInfo('listNoTable'), 'Parameterized/CtlNew', '', 'buildListNews(info);', 'System/');
}


function buildListNews(info) {
    console.log(info);

    var listado = "";

    if (info.length > 0) {
        for (f = 0; f < info.length; f++) {

            var id = info[f].id;
            var fecha = info[f].fecha;
            var fechaOk = new Date(fecha);
            var titulo_noticia = info[f].titulo_noticia;
            var meses = new Array("ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE");
            var fechaLarga = fechaOk.getDate() + " DE " + meses[fechaOk.getMonth()] + " DE " + fechaOk.getFullYear();


            listado = listado + "<div class='row' onclick='cargarNoticia(" + id + ");'><a class='modal-trigger seleccionable' href='#modalNoticia'><div class='col s12 m1'></div><div class='col s12 m8'><div class='icon-block'><div> <hr style='color: #DFDFDF;' /></div><label class='textBoldHomeGray'>";
            listado = listado + fechaLarga + "</label><br><p class='light textLightGray'>";
            listado = listado + titulo_noticia + "</p></div></div><div class='col s12 m1'></div></a></div>"
        }

        $("#lstNoticias").html(listado);

    }
}






function cargarNoticia(id) {
    $("#txtId").val(id);
    Execute(scanInfo('search',true,'modalNoticia'), 'Parameterized/CtlNew', '', 'mostrarNoticia(info);', 'System/');
}


function mostrarNoticia(info) {
    alert(info[0].foto);
    $("#imgNoticia").attr("src",info[0].foto);
    $("#lblTitulo").html(info[0].titulo);
    $("#lblDescripcion").html(info[0].descripcion);
    //  $('#modalNoticia').modal('open');
}