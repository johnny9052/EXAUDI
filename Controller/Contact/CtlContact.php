<?php

/* IMPORTS */
require '../../DTO/Message/MessageDTO.php';
include '../../System/Infraestructure/Repository.php';

/* RECEPCION DE DATOS */
$action = (isset($_REQUEST['action']) ? $_REQUEST['action'] : "");
$nombre = (isset($_POST['name']) ? $_POST['name'] : "");
$email = (isset($_POST['email']) ? $_POST['email'] : "");
$organizacion = (isset($_POST['organizacion']) ? $_POST['organizacion'] : "");
$mensaje = (isset($_POST['mensaje']) ? $_POST['mensaje'] : "");

/* DEFINICION DE OBJETOS */
$rep = new Repository();
$rep->sendEmail($email, $nombre, $mensaje);

echo "{res:'Success',msg:'Mensaje enviado satisfactoriamente'}";



