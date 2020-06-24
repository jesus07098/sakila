<?php

require_once "funciones/helpers.php";

$nombrePagina="Principal";


$nombre= $_GET['nombre'] ?? "";





include_once "vistas/vista_principal.php";

