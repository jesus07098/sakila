<?php

$nombrePagina = "Actor";


$nombreActor= $_GET['nombreActor'] ?? "";
$apellidoActor= $_GET['apellidoActor'] ?? "";



//Aseguranos de que el usuario ha hecho click en el boton

if(isset($_GET['guardar_actor'])){
   //codigo para guardar en la BD

}

include_once "vistas/vista_actor.php";