<?php

/* IMPORTS */
require '../../DTO/Parameterized/NewDTO.php';
require '../../DAO/Parameterized/NewDAO.php';
include '../../Helper/Action/Action.php';

include '../../Infraestructure/Cleaner.php';

/* RECEPCION DE DATOS */
$action = (isset($_REQUEST['action']) ? $_REQUEST['action'] : "");
$id = (isset($_POST['id']) ? $_POST['id'] : "");
$name = (isset($_POST['title']) ? $_POST['title'] : "");
$description = (isset($_POST['description']) ? $_POST['description'] : "");
$date = (isset($_POST['fecha']) ? $_POST['fecha'] : "");
$urlImage = (isset($_POST['imagen']) ? $_POST['imagen'] : "");
$urlVideo = (isset($_POST['urlVideo']) ? $_POST['urlVideo'] : "");
$urlImagePrevia = (isset($_POST['imagenPrevia']) ? $_POST['imagenPrevia'] : "");

$filePath = "";

/* Se construye la ruta de la imagen y se crea, siempre y cuando haya llegado 
  una imagen para guardar */
if ($urlImage != null && $urlImage != "") {
    $cleaner = new Cleaner();
    $route = '../../Resource/Images/News/';
    $filePath = $route . $name . $cleaner->cleanValueDate(date('Y-m-d H:i:s')) . '.jpg';

    base64_to_jpeg($urlImage, $filePath);
}


/* Se se va a actilizar, se verifica si la imagen se ha actualizado */
if ($action == "update") {
    /* Se valida se viene una imagen previa y se ha cargado otra para eliminar la anterior */
    if ($urlImagePrevia !== "" && $urlImage !== "") {
        unlink($urlImagePrevia);
    } else {
        /*Actualiza la imagen actual a la previa, para que no quede sin imagen en la DB, siempre y cuando
         exista una imagen previa, si no se deja la nueva que se haya seleccionado*/        
        if ($urlImagePrevia != null && $urlImagePrevia != "") {
            $filePath = $urlImagePrevia;
        }
    }
}

/* Si se va a eliminar, se actualiza la ruta de la imagen previa a la actual para poderla 
  elimnar */
if ($action == "delete") {
    $filePath = $urlImagePrevia;
}


/* DEFINICION DE OBJETOS */

$obj = new NewDTO($id, $name, $description, $date, $filePath, $urlVideo);
$dao = new NewDAO();

/* CONTROL DE ACCIONES */
ExecuteAction($action, $obj, $dao);

