<?php include_once "componentes/comp_head.php" ?>
<body>


<!-- Contenido -->


<div class="row">
    <input type="checkbox" id="check">
    <label for="check">

        <i class="pulse" id="btn"><b class="fas fa-bars"></b></i>
        <i class="fas fa-times " id="cancel"></i>
    </label>
    <div class="" id="sidebar">
        <header>Sakila</header>
        <?php include_once "componentes/comp_menu.php" ?>
    </div>
    <section class="cuerpo mt-2">

        <div class="container">

            <div class="col-md-7 offset-md-2">
                <h3 id="espacio-titulo"><i class="fas fa-user"></i> <?php echo $nombrePagina; ?> </h3>
                <hr>
                <div class="row">
                    <div class="col-md-7">
                        <form action="actor.php" method="post">
                            <div class="input-field mb-3">
                                <input type="text" name="nombreActor" id="nombreActor" class="form-control validate"
                                       value="<?= $nombreActor ?>">
                                <label for="nombreActor">Nombre: </label>
                            </div>
                            <div class="input-field mb-3">
                                <input type="text" name="apellidoActor" id="apellidoActor" class="form-control validate"
                                       value="<?= $apellidoActor ?>">
                                <label for="apellidoActor">Apellido: </label>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="guardarActor" class="btn teal green accent-4">Guardar
                                </button>
                            </div>
                        </form>
                        <?php
                        if (isset($error)) {
                            echo "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                                  {$error}
                                  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                  </button>
                                </div>";
                        }
                        if (isset($actorInsertado)) {
                            echo "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                                   Los datos del actores se  han insertado correctamente...
                                  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                  </button>
                                </div>";

                        }
                        ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table highlight striped centered">
                            <thead class="">
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($actores as $actor) {
                                echo "<tr>
                            <th scope=\"row\">{$actor['actor_id']}</th>
                           <td>{$actor['first_name']}</td>
                           <td>{$actor['last_name']}</td>
                       </tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>


<?php include_once 'componentes/comp_foot.php' ?>
</body>
</html>