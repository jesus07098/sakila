<?php
require_once "funciones/helpers.php";
require_once "modelos/modelo_categoria.php";

//Nombre de la pagina
$nombrePagina = "Categoría";

//Variables de datos del pais
$idCategoria = $_POST['idCategoria'] ?? "";
$nombreCategoria = $_POST['nombreCategoria'] ?? "";

try {
    if (isset($_POST['guardarCategoria'])) {

        //codigo para guardar en la BD
        if (empty($nombreCategoria)) {
            throw new Exception("La categoría está vacia");
        }

        $datos = compact('nombreCategoria');

        if (empty($idCategoria)) {

            //Insertar los datos
            $categoriaInsertada = insertarCategoria($conexion, $datos);
            $_SESSION['mensaje'] = "Datos insertados correctamente...";
            if (!$categoriaInsertada) {
                throw new Exception("Ocurrió un error al insertar los datos de la categoría...");
            }
        } else {

            //Agregar el id en array datos
            $datos['idCategoria'] = $idCategoria;
            imprimirArray($datos);
            //Actualizar datos
            $categoriaEditada = editarCategoria($conexion, $datos);
            $_SESSION['mensaje'] = "Datos modificados correctamente...";

            if (!$categoriaEditada) {
                throw new Exception("Ocurrio un error al modificar los datos...");
            }
        }

        //redireccionar la pagina
        redireccionar("categoria.php");
    }
    if (isset($_POST['eliminarCategoria'])) {

        $idCategoria = $_POST['eliminarCategoria'] ?? "";

        if (empty($idCategoria)) {
            throw new Exception("El valor del id está vacío");
        }
        //preparar array
        $datos = compact('idCategoria');

        //Eliminar
        $eliminado = eliminarCategoria($conexion, $datos);

        $_SESSION['mensaje'] = "Datos eliminados correctamente";

        if (!$eliminado) {
            throw new Exception("No se pudieron eliminar los datos");
        }
        redireccionar("categoria.php");
    }

    if (isset($_POST['editarCategoria'])) {

        $idCategoria = $_POST['editarCategoria'] ?? "";

        if (empty($idCategoria)) {
            throw new Exception("El valor del id está vacío");
        }

        $datos = compact('idCategoria');

        $resultado = obtenerCategoriasPorId($conexion, $datos);

        $nombreCategoria = $resultado['name'];

        $_SESSION['mensaje'] = "Datos modificados correctamente";
        //redireccionar("actor.php");
    }

} catch (Exception $e) {
    $error = $e->getMessage();
}

$categorias = obtenerCategoria($conexion);
include_once "vistas/vista_categoria.php";