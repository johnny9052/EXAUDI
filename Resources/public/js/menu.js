$(document).ready(function () {
    $("#txtMenuIcono").click(mostrarOcultar);
    $("#txtMenu").click(mostrarOcultar);
    
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
