<?php
require_once "funciones/helpers.php";
require_once 'modelos/modelo_pais.php';

//Nombre de la pagina
$nombrePagina = "País";

//Variables de datos del pais
$idPais = $_POST['idPais'] ?? "";
$nombrePais = $_POST['nombrePais'] ?? "";

try {
    if (isset($_POST['guardarPais'])) {

        //codigo para guardar en la BD
        if (empty($nombrePais)) {
            throw new Exception("El campo país está vacio");
        }

        $datos = compact('nombrePais');

        if (empty($idPais)) {

            //Insertar los datos
            $paisInsertado = insertarPaises($conexion, $datos);
            $_SESSION['mensaje'] = "Datos insertados correctamente...";
            if (!$paisInsertado) {
                throw new Exception("Ocurrió un error al insertar los datos del pais...");
            }
        } else {
            //Agregar el id en array datos
            $datos['idPais'] = $idPais;

            //Actualizar datos
            $paisEditado = editarPais($conexion, $datos);
            $_SESSION['mensaje'] = "Datos modificados correctamente...";

            if (!$paisEditado) {
                throw new Exception("Ocurrio un error al modificar los datos...");
            }
        }

        //redireccionar la pagina
        redireccionar("pais.php");
    }
    if (isset($_POST['eliminarPais'])) {

        $idPais = $_POST['eliminarPais'] ?? "";

        if (empty($idPais)) {
            throw new Exception("El valor del id está vacío");
        }
        //preparar array
        $datos = compact('idPais');

        //Eliminar
        $eliminado = eliminarPaises($conexion, $datos);

        $_SESSION['mensaje'] = "Datos eliminados correctamente";

        if (!$eliminado) {
            throw new Exception("No se pudieron eliminar los datos");
        }
        redireccionar("pais.php");
    }

    if (isset($_POST['editarPais'])) {
        $idPais = $_POST['editarPais'] ?? "";
        if (empty($idPais)) {
            throw new Exception("El valor del id está vacío");
        }

        $datos = compact('idPais');
        $resultado = obtenerPaisesPorId($conexion, $datos);
        $nombrePais = $resultado['country'];
        $_SESSION['mensaje'] = "Datos modificados correctamente";
        //redireccionar("actor.php");
    }

} catch (Exception $e) {
    $error = $e->getMessage();
}

$paises = obtenerPaises($conexion);

include_once 'vistas/vista_pais.php';