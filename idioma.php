<?php
require_once "funciones/helpers.php";
require_once 'modelos/modelo_idioma.php';

$nombrePagina = "Idioma";

$nombreIdioma = $_POST['nombreIdioma'] ?? "";
$idIdioma = $_POST['idIdioma'] ?? "";

//Aseguranos de que el usuario ha hecho click en el boton
try {
    if (isset($_POST['guardarIdioma'])) {

        //codigo para guardar en la BD
        if (empty($nombreIdioma)) {
            throw new Exception("El idioma está vacio");
        }

        $datos = compact('nombreIdioma');

        // Verificar que el gerente no tenga una tienda
        $tieneIdioma = verificarIdiomaPorNombre($conexion, $datos);

        if ($tieneIdioma['cantidad'] > 0) {
            throw new Exception('Idioma ya insertado...');
        }


        //Insertar los datos
        if (empty($idIdioma)) {

            $idiomaInsertado = insertarIdioma($conexion, $datos);
            $_SESSION['mensaje'] = "Datos insertados correctamente...";

            if (!$idiomaInsertado) {
                throw new Exception("Ocurrió un error al insertar los datos del idioma");
            }

        } else {

            //Agregar el id en array datos
            $datos['idIdioma'] = $idIdioma;

            //Actualizar datos
            $idiomaEditado = editarIdioma($conexion, $datos);
            $_SESSION['mensaje'] = "Datos modificados correctamente...";

            if (!$idiomaEditado) {
                throw new Exception("Ocurrió un error al modificar los datos...");
            }
        }
        redireccionar("idioma.php");
    }
    //eliminar idioma
    if (isset($_POST['eliminarIdioma'])) {

        $idIdioma = $_POST['eliminarIdioma'] ?? "";

        if (empty($idIdioma)) {
            throw new Exception("El valor del id está vacío");
        }

        //preparar array
        $datos = compact('idIdioma');

        //Eliminar
        $eliminado = eliminarIdioma($conexion, $datos);

        $_SESSION['mensaje'] = "Datos eliminados correctamente";

        if (!$eliminado) {
            throw new Exception("No se pudieron eliminar los datos");
        }
        redireccionar("idioma.php");
    }

    //editar idioma
    if (isset($_POST['editarIdioma'])) {

        $idIdioma = $_POST['editarIdioma'] ?? "";

        if (empty($idIdioma)) {
            throw new Exception("El valor del id está vacío");
        }

        $datos = compact('idIdioma');

        $resultado = obtenerIdiomaporId($conexion, $datos);

        $nombreIdioma = $resultado['name'];

    }

} catch (Exception $e) {
    $error = $e->getMessage();
}

$idiomas = obtenerIdioma($conexion);

include_once "vistas/vista_idioma.php";