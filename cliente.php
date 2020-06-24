<?php

require_once 'funciones/helpers.php';

$nombrePagina = "Cliente";

$direccion2= $_GET['nombre'] ?? "";
$distrito= $_GET['apellido'] ?? "";
$ciudad= $_GET['email'] ?? "";


include_once "vistas/vista_cliente.php";