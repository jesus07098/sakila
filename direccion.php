<?php
require_once "funciones/helpers.php";
$nombrePagina= "Direccion";


$direccion= $_GET['direccion'] ?? "";
$direccion2= $_GET['direccion2'] ?? "";
$distrito= $_GET['distrito'] ?? "";
$ciudad= $_GET['ciudad'] ?? "";
$codigoPostal= $_GET['codigoPostal'] ?? "";
$telefono= $_GET['telefono'] ?? "";
$ubicacion= $_GET['ubicacion'] ?? "";

//Aseguranos de que el usuario ha hecho click en el boton

if(isset($_GET['guardarDireccion'])){
    //codigo para guardar en la BD

}


include_once "vistas/vista_direccion.php";