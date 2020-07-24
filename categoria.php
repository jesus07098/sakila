<?php
require_once "funciones/helpers.php";
require_once "modelos/modelo_categoria.php";
$nombrePagina = "Categoría";

$nombreCategoria = $_POST['nombreCategoria'] ?? "";

try {
    if (isset($_POST['guardarCategoria'])) {
        //codigo para guardar en la BD


        if (empty($nombreCategoria)) {
            throw new Exception("La categoría está vacia");
        }


        $datos = compact('nombreCategoria');
        //Insertar los datos
        $insertado = insertarCategoria($conexion, $datos);
        $mensaje = "Datos insertados correctamente...";
        if (!$insertado) {
            throw new Exception("Ocurrió un error al insertar los datos de la categoría...");
        }
        //redireccionar la pagina

        redireccionar("categoria.php");

    }
} catch (Exception $e) {
    $error = $e->getMessage();
}

$categorias = obtenerCategoria($conexion);
include_once "vistas/vista_categoria.php";