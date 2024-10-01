<?php 
//CONTROLADORES
require_once "controlador/rutas.controlador.php";
require_once "controlador/cursos.controlador.php";
require_once "controlador/cliente.controlador.php";

//MODELOS
require_once "modelo/cursos.modelo.php";
require_once "modelo/cliente.modelo.php";

$rutas=new ControladorRutas();
$rutas->inicio();

?>