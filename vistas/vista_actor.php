<?php include_once "componentes/comp_head.php" ?>
<body>

<!-- Contenido -->
<div class="row">
    <?php include_once "componentes/comp_parte_menu.php" ?>
    <h4 id="espacio-titulo" class="offset-md-6"><?php echo $nombrePagina; ?> </h4>

    <div class="col-md-10 offset-md-2">
        <div class="row">
            <div class="col-md-11">
                <hr>
                <div class="card shadow-lg p-3 mb-5 bg-white ">
                    <div class="card-header bg-dark text-white font">Formulario de Actor</div>
                    <form action="actor.php" method="post">
                        <input type="hidden" name="idActor" value="<?= $idActor ?>">
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
                    include_once 'componentes/comp_partes_mensaje.php';
                    ?>

                </div>
            </div>

            <div class="row">
                <div class="col-md-11">

                    <!--formulario -->
                    <form action="" method="post">

                        <table class="table table-responsive  table-bordered table-hover  striped centered">
                            <thead class="">
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Acciones</th>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($actores as $actor) {
                                echo "<tr>
                            <th scope=\"row\">{$actor['actor_id']} </th>
                           <td>{$actor['first_name']}</td>
                           <td>{$actor['last_name']}</td>
                           <td>
                           <button type='submit' class='btn btn-estilo btn-primary  d50000 red accent-4' title='Eliminar actor'  name='eliminarActor'  value='{$actor['actor_id']}'><i class='fas fa-trash i-acciones' ></i></button>
                           <button type='submit' class='btn btn-estilo' title='Editar actor'  name='editarActor' value='{$actor['actor_id']}'><i class=\"fas fa-pen i-acciones\"></i></button>
                           </td>
                       </tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                    </form>  <!--formulario -->
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'componentes/comp_foot.php' ?>
</body>
</html>