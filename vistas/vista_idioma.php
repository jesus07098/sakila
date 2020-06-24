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
                    <form action="actor.php" method="get">
                        <div class="mb-3">
                            <label for="nombre">Nombre: </label>
                            <input type="text" name="nombre" id="nombre" class="form-control">

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