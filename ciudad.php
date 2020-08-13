<?php
// incluidos
require_once "funciones/helpers.php";
require_once "modelos/modelo_pais.php";
require_once "modelos/modelo_ciudad.php";

//variables
$nombrePagina = "Ciudad";
$nombreCiudad = $_POST['nombreCiudad'] ?? "";
$idPais = $_POST['pais'] ?? "";
$idCiudad = $_POST['idCiudad'] ?? "";


//Asegurarnos de que el usuario haya hecho clic en el boton guardar
try {
    //guardar actor
    if (isset($_POST['guardarCiudad'])) {
        //codigo para guardar en la BD
        if (empty($nombreCiudad)) {
            throw new Exception("El campo ciudad está vacio");
        }
        if (empty($idPais)) {
            throw new Exception("No ha seleccionado un país");
        }
        $datos = compact('nombreCiudad', 'idPais');
        //Insertar los datos
        if (empty($idCiudad)) {
            $ciudadInsertada = insertarCiudades($conexion, $datos);
            $_SESSION['mensaje'] = "Datos insertados correctamente...";
            if (!$ciudadInsertada) {
                throw new Exception("Ocurrió un error al insertar los datos de la ciudad");
            }
        } else {
            //Agregar el id en array datos
            $datos['idCiudad'] = $idCiudad;

            //Actualizar datos
            $ciudadEditada = editarCiudades($conexion, $datos);
            $_SESSION['mensaje'] = "Datos modificados correctamente...";

            if (!$ciudadEditada) {
                throw new Exception("Ocurrio un error al modificar los datos...");
            }
        }
        //redireccionar la pagina
        redireccionar('ciudad.php');

    }

    //eliminar actor
    if (isset($_POST['eliminarCiudad'])) {
        $idCiudad = $_POST['eliminarCiudad'] ?? "";
        if (empty($idCiudad)) {
            throw new Exception("El valor del id está vacío");
        }
        //preparar array
        $datos = compact('idCiudad');

        //Eliminar
        $eliminado = eliminarCiudad($conexion, $datos);
        $_SESSION['mensaje'] = "Datos eliminados correctamente";
        if (!$eliminado) {
            throw new Exception("No se pudieron eliminar los datos");
        }
        redireccionar("ciudad.php");
    }

    //editar actor
    if (isset($_POST['editarCiudad'])) {
        $idCiudad = $_POST['editarCiudad'] ?? "";
        if (empty($idCiudad)) {
            throw new Exception("El valor del id está vacío");
        }
        $datos = compact('idCiudad');
        $resultado = obtenerCiudadPorId($conexion, $datos);
        $nombreCiudad = $resultado['city'];
        $idPais = $resultado['country_id'];


    }

} catch (Exception $e) {
    $error = $e->getMessage();
}









$paises = obtenerPaises($conexion);
$ciudades = obtenerCiudades($conexion);


include_once "vistas/vista_ciudad.php";