<?php include_once "componentes/comp_head.php" ?>
<body>

<!-- Contenido -->
<div class="row">
    <?php include_once "componentes/comp_parte_menu.php" ?>
    <div class="col-md-7 offset-md-2">
        <h3 id="espacio-titulo"><?php echo $nombrePagina; ?> </h3>
        <hr>
        <div class="row">
            <div class="col-md-7">
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
        <hr>
        <div class="row">
            <div class="col-md-12">

                <!--formulario -->
                <form action="" method="post">

                    <table class="table highlight striped centered">
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