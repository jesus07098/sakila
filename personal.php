<?php
$nombrePagina = "Personal";
require_once "modelos/modelo_direccion.php";
require_once "modelos/modelo_tienda.php";
require_once "modelos/modelo_personal.php";
require_once "funciones/helpers.php";

$nombre = $_POST["nombre"] ?? "";
$apellido = $_POST["apellido"] ?? "";
$direccion = $_POST["direccion"] ?? "";
$imagen = $_POST["imagen"] ?? "";
$email = $_POST["email"] ?? "";
$idTienda = $_POST["idTienda"] ?? "";

if (isset($_POST["activo"])) {
    $activo = 1;
} else {
    $activo = 0;
}

$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";

try {
    if (isset($_POST['guardarPersonal'])) {

        //codigo para guardar en la BD
        if (empty($nombre)) {
            throw new Exception("El nombre está vacio");
        }

        if (empty($apellido)) {
            throw new Exception("El apellido está vacio");
        }

        if (empty($direccion)) {
            throw new Exception("La dirección está vacia");
        }

        if (empty($email)) {
            throw new Exception("El email está vacio");
        }

        if (empty($idTienda)) {
            throw new Exception("El campo de tienda no puede estar vacio");
        }

        if (empty($username)) {
            throw new Exception("El nombre de usuario está vacio");
        }

        if (empty($password)) {
            throw new Exception("La contraseña está vacia");
        }

        $datos = compact('nombre', 'apellido', 'direccion', 'imagen', 'email', 'idTienda', 'activo', 'username', 'password');

        //Insertar los datos
        $personalInsertado = insertarPersonal($conexion, $datos);

        $_SESSION['mensaje'] = "Datos insertados correctamente...";
        if (!$personalInsertado) {
            throw new Exception("Ocurrió un error al insertar los datos del actor");
        }

        //redireccionar la pagina
        redireccionar('personal.php');
    }
} catch (Exception $e) {
    $error = $e->getMessage();
}

$direcciones = obtenerDirecciones($conexion);
$tiendas = obtenerTiendas($conexion);
$infoPersonales = obtenerInfoPersonales($conexion);

include_once "vistas/vista_personal.php";