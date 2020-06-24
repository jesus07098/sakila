<?php include_once "componentes/comp_head.php" ?>
<body>

<!-- Barra superior -->
<nav class="navbar navbar-light bg-dark">
    <a class="navbar-brand text-white container-fluid" href="#">Sakila</a>
</nav>
<!-- Contenido -->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <?php include_once "componentes/comp_menu.php" ?>
        </div>

        <div class="col-md-9">
            <h3> <?php echo $nombrePagina; ?> </h3>

            <hr>
            <div class="row">
                <div class="col-md-5">
                    <form action="direccion.php" method="get">
                        <div class="mb-3">
                            <label for="direccion">Dirección: </label>
                            <input type="text" name="direccion" id="direccion" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="direccion2">Direccion 2: </label>
                            <input type="text" name="direccion2" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="distrito">Distrito: </label>
                            <input type="text" name="distrito" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="distrito">Distrito: </label>
                            <select  name="distrito" class="form-select">
                                <option value="">Listado de la ciudad</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="codigoPostal">Código Postal: </label>
                            <input type="text" name="codigoPostal" id="codigoPostal" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="telefono">Teléfono: </label>
                            <input type="tel" name="telefono" id="telefono" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="ubicacion">Ubicación: </label>
                            <input type="text" name="ubicacion" id="ubicacion" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="guardarDireccion" class="btn btn-success">Guardar datos</button>
                        </div>

                    </form>
                </div>
        </div>
    </div>
</div>


</body>
</html>