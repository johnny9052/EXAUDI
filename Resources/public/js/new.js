/* Funciones jQuery */
$(window).on("load", function (e) {
    list();
});


function list() {
    Execute(scanInfo('listNoTable'), 'Parameterized/CtlNew', '', 'buildListNews(info);', 'System/');
}


function buildListNews(info){
    alert(info);
};




