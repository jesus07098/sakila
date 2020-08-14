<?php

require_once 'funciones/helpers.php';
require_once "modelos/modelo_direccion.php";
require_once "modelos/modelo_cliente.php";
require_once "modelos/modelo_tienda.php";

$nombrePagina = "Cliente";

$tienda = $_POST['tienda'] ?? "";
$nombre = $_POST['nombre'] ?? "";
$apellido = $_POST['apellido'] ?? "";
$email = $_POST['email'] ?? "";
$direccion = $_POST['direccion'] ?? "";
if (isset($_POST["activo"])) {
    $activo = 1;
} else {
    $activo = 0;
}

try {
    if (isset($_POST['guardarCliente'])) {

        //codigo para guardar en la BD
        if (empty($tienda)) {
            throw new Exception("El campo tienda está vacio");
        }
        if (empty($nombre)) {
            throw new Exception("El campo nombre está vacio");
        }
        if (empty($apellido)) {
            throw new Exception("La dirección está vacia");
        }

        if (empty($email)) {
            throw new Exception("El email está vacio");
        }
        if (empty($direccion)) {
            throw new Exception("El campo de dirección no puede estar vacio");
        }

        $datos = compact('tienda', 'nombre', 'apellido', 'email', 'direccion', 'activo');

        //Insertar los datos
        $clienteInsertado = insertarClientes($conexion, $datos);
        $_SESSION['mensaje'] = "Datos insertados correctamente...";

        if (!$clienteInsertado) {
            throw new Exception("Ocurrió un error al insertar los datos del cliente");
        }
        //redireccionar la pagina
        redireccionar('cliente.php');
    }
} catch (Exception $e) {
    $error = $e->getMessage();
}

$tiendas = obtenerTiendas($conexion);
$direcciones = obtenerDirecciones($conexion);
$infoClientes = obtenerInfoClientes($conexion);

include_once "vistas/vista_cliente.php";