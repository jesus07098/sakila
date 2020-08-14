<?php include_once "componentes/comp_head.php" ?>
<body>

<!-- Barra superior -->

<!-- Contenido -->
<div class="row">
    <?php include_once "componentes/comp_parte_menu.php" ?>
    <div class="col-md-9 offset-md-2">
        <h4 id="espacio-titulo" class="offset-md-5"> <?php echo $nombrePagina; ?> </h4>
        <div class="row">
            <div class="col-md-12">
                <hr>
                <div class="card shadow-lg p-3 mb-5 bg-white ">
                    <div class="card-header bg-dark text-white">Formulario de <?php echo $nombrePagina; ?></div>
                    <form action="idioma.php" method="post">
                        <input type="hidden" name="idIdioma" value="<?= $idIdioma ?>">
                        <div class="mb-3">
                            <label for="nombreIdioma">Nombre: </label>
                            <input type="text" name="nombreIdioma" id="nombreIdioma"
                                   class="form-control validate" value="<?= $nombreIdioma ?>">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="guardarIdioma" class="btn teal green accent-4">Guardar
                            </button>
                        </div>
                    </form>
                </div>
                <?php include_once "componentes/comp_partes_mensaje.php" ?>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <form action="" method="post">
                    <table class="table centered">
                        <thead>
                        <th scope="col">ID</th>
                        <th scope="col">Idioma</th>
                        <th scope="col">Acciones</th>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($idiomas as $idioma) {
                            echo "<tr>
                            <th scope=\"row\">{$idioma['language_id']}</th>
                            <td>{$idioma['name']}</td>
                          <td>
                            <button type='submit' class='btn btn-estilo btn-primary btn-sm d50000 red accent-4' title='Eliminar idioma'  name='eliminarIdioma'  value='{$idioma['language_id']}'><i class='fas fa-trash i-acciones'></i></button>
                            <button type='submit' class='btn btn-estilo btn-sm btn-danger ' title='Editar idioma'  name='editarIdioma' value='{$idioma['language_id']}'><i class='fas fa-pen i-acciones'></i></button>
                          </td>
                        </tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once 'componentes/comp_foot.php' ?>
</body>
</html>