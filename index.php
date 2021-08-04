<?php 
require_once "config/conexion.php";
require_once "Controller/inicioController.php";
require_once "Controller/Acciones.php";

require_once "Models/AccionesModel.php";

$inicio = new Inicio();
$inicio->inicio();

 ?>