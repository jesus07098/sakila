<?php

require_once "funciones/helpers.php";
/*
include_once "modelos/modelo_actor.php";

$actores=obtenerActores($conexion);

imprimirArray($actores);
*/
$nombrePagina = "Principal";


$nombre = $_POST['nombre'] ?? "";


//Incluir la vista
include_once "vistas/vista_principal.php";

