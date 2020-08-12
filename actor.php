<?php
require_once "funciones/helpers.php";
require_once "modelos/modelo_actor.php";


$nombrePagina = "Actor";
$idActor = $_POST['idActor'] ?? "";
$nombreActor = $_POST['nombreActor'] ?? "";
$apellidoActor = $_POST['apellidoActor'] ?? "";

//Aseguranos de que el usuario ha hecho click en el boton

try {
    //guardar actor
    if (isset($_POST['guardarActor'])) {
        //codigo para guardar en la BD
        if (empty($nombreActor)) {
            throw new Exception("El nombre del actor está vacio");
        }
        if (empty($apellidoActor)) {
            throw new Exception("El apellido del actor está vacio");
        }
        $datos = compact('nombreActor', 'apellidoActor');

        //Insertar los datos
        if (empty($idActor)) {
            $actorInsertado = insertarActores($conexion, $datos);
            $_SESSION['mensaje'] = "Datos insertados correctamente...";
            if (!$actorInsertado) {
                throw new Exception("Ocurrió un error al insertar los datos del actor");
            }
        } else {
            //Agregar el id en array datos
            $datos['idActor'] = $idActor;


            //Actualizar datos
            $actorEditado = editarActores($conexion, $datos);
            $_SESSION['mensaje'] = "Datos modificados correctamente...";

            if (!$actorEditado) {
                throw new Exception("Ocurrio un error al modificar los datos...");
            }
        }
        //redireccionar la pagina
        redireccionar('actor.php');

    }

    //eliminar actor
    if (isset($_POST['eliminarActor'])) {
        $idActor = $_POST['eliminarActor'] ?? "";

        if (empty($idActor)) {
            throw new Exception("El valor del id está vacío");
        }
        //preparar array
        $datos = compact('idActor');

        //Eliminar

        $eliminado = eliminarActores($conexion, $datos);
        $_SESSION['mensaje'] = "Datos eliminados correctamente";
        if (!$eliminado) {
            throw new Exception("No se pudieron eliminar los datos");
        }
        redireccionar("actor.php");
    }

    //editar actor
    if (isset($_POST['editarActor'])) {


        $idActor = $_POST['editarActor'] ?? "";
        if (empty($idActor)) {
            throw new Exception("El valor del id está vacío");
        }
        $datos = compact('idActor');
        $resultado = obtenerActoresPorId($conexion, $datos);
        $nombreActor = $resultado['first_name'];
        $apellidoActor = $resultado['last_name'];


    }


} catch (Exception $e) {
    $error = $e->getMessage();
}


$actores = obtenerActores($conexion);

include_once "vistas/vista_actor.php";


