<?php


$nombrePagina = "Ciudad";

$ciudad= $_GET['ciudad'] ?? "";
$pais= $_GET['pais'] ?? "";


include_once "vistas/vista_ciudad.php";