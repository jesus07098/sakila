<?php

require_once "funciones/helpers.php";

$nombrePagina = "Principal";

$nombre = $_POST['nombre'] ?? "";

//Incluir la vista
include_once "vistas/vista_principal.php";

