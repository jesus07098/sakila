<?php
require_once "funciones/helpers.php";

$nombrePagina = "Idioma";

$direccion= $_GET['nombre'] ?? "";


//Aseguranos de que el usuario ha hecho click en el boton

if(isset($_GET['guardarDireccion'])){
    //codigo para guardar en la BD

}


incluir_vista("idioma");