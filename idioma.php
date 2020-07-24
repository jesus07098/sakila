<?php
require_once "funciones/helpers.php";
require_once 'modelos/modelo_idioma.php';
$nombrePagina = "Idioma";

$nombreIdioma = $_POST['nombreIdioma'] ?? "";

try {
    if (isset($_POST['guardarIdioma'])) {
        //codigo para guardar en la BD


        if (empty($nombreIdioma)) {
            throw new Exception("El idioma está vacio");
        }


        $datos = compact('nombreIdioma');
        //Insertar los datos
        $insertado = insertarIdioma($conexion, $datos);
        $mensaje = "Datos insertados correctamente...";
        if (!$insertado) {
            throw new Exception("Ocurrió un error al insertar los datos del Idioma...");
        }
        //redireccionar la pagina

        redireccionar("idioma.php");

    }
} catch (Exception $e) {
    $error = $e->getMessage();
}


$idiomas = obtenerIdioma($conexion);


include_once "vistas/vista_idioma.php";