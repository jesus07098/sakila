<?php include_once "componentes/comp_head.php" ?>

<body>
<!-- Contenido -->
<div class="">
    <div class="row">

        <?php include_once "componentes/comp_parte_menu.php" ?>

        <div class="col-md-10 offset-md-2">
            <h4 id="espacio-titulo" class="offset-md-5"> <?php echo $nombrePagina; ?> </h4>

            <div class="row">
                <div class="col-md-12">
                    <hr>

                    <div class="card shadow-lg p-3 mb-5 bg-white ">
                        <div class="card-header bg-dark text-white">Formulario de <?php echo $nombrePagina; ?></div>

                        <form action="categoria.php" method="post">
                            <input type="hidden" name="idCategoria" value="<?= $idCategoria ?>">
                            <div class="mb-3">
                                <label for="nombreCategoria">Nombre: </label>
                                <input type="text" name="nombreCategoria" id="nombreCategoria" class="form-control"
                                       value="<?= $nombreCategoria ?>" placeholder="Digite la categoría">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="guardarCategoria" class="btn teal green accent-4">
                                    Guardar
                                </button>
                            </div>
                        </form>

                        <?php
                        include_once "componentes/comp_partes_mensaje.php"
                        ?>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <form action="" method="post">
                            <table class="table">
                                <thead>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Acciones</th>
                                </thead>
                                <tbody>

                                <?php
                                foreach ($categorias as $categoria) {
                                    echo "<tr>
                                              <th scope=\"row\">{$categoria['category_id']}</th>
                                              <td>{$categoria['name']}</td>
                                              <td>
                                                   <button type='submit' class='btn btn-estilo  btn-primary btn-sm d50000 red accent-4' title='Eliminar categoria'  
                                                   name='eliminarCategoria'  value='{$categoria['category_id']}'><i class='fas fa-trash i-acciones'></i></button>
                                                   
                                                   <button type='submit' class='btn btn-estilo  btn-sm btn-danger ' title='Editar categoria'  name='editarCategoria' 
                                                   value='{$categoria['category_id']}'><i class='fas fa-pen i-acciones'></i></button>
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
    </div>
</div>

<?php require_once "componentes/comp_foot.php" ?>

</body>
</html>
