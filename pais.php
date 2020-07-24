<?php
require_once "funciones/helpers.php";
require_once 'modelos/modelo_pais.php';

$nombrePagina = "País";
$nombrePais = $_POST['pais'] ?? "";


try {
    if (isset($_POST['guardarPais'])) {
        //codigo para guardar en la BD


        if (empty($nombrePais)) {
            throw new Exception("El nombre del actor está vacio");
        }


        $datos = compact('nombrePais');
        //Insertar los datos
        $insertado = insertarPaises($conexion, $datos);
        $mensaje = "Datos insertados correctamente...";
        if (!$insertado) {
            throw new Exception("Ocurrió un error al insertar los datos del País...");
        }
        //redireccionar la pagina

        redireccionar("pais.php");

    }
} catch (Exception $e) {
    $error = $e->getMessage();
}


$paises = obtenerPaises($conexion);

include_once 'vistas/vista_pais.php';