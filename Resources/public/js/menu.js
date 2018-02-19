$(document).ready(function () {
    $("#txtMenuIcono").click(mostrarOcultar);
    $("#txtMenu").click(mostrarOcultar);

    $("#btnTopPage").click(topPage);

    $(".button-collapse").sideNav();
});

var estadoMenu = false;

function mostrarOcultar() {

    if (estadoMenu) {

        $("#menuContenedor").removeClass("bannerColorGris");
        $("#menuContenedor").addClass("bannerColor");

        $(".colorTextoBanner").css("display", "none");


        $("#txtMenu").removeClass("colorTextoBannerMenuGris");
        $("#txtMenu").addClass("colorTextoBannerMenu");


        $("#txtMenuIcono").removeClass("colorIconoBannerMenuGris");
        $("#txtMenuIcono").addClass("colorIconoBannerMenu");

        $(".menuShowHide").fadeOut("slow");
        estadoMenu = false;
    } else {

        $("#menuContenedor").removeClass("bannerColor");
        $("#menuContenedor").addClass("bannerColorGris");

        $(".colorTextoBanner").css("display", "block");

        $("#txtMenu").removeClass("colorTextoBannerMenu");
        $("#txtMenu").addClass("colorTextoBannerMenuGris");

        $("#txtMenuIcono").removeClass("colorIconoBannerMenu");
        $("#txtMenuIcono").addClass("colorIconoBannerMenuGris");

        $(".menuShowHide").fadeIn("slow");
        estadoMenu = true;
    }

}




function topPage() {    
    $('html, body').animate({scrollTop: 0}, 'slow');
}