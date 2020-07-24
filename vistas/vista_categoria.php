<?php include_once "componentes/comp_head.php" ?>
<body>

<!-- Barra superior -->

<!-- Contenido -->

<div class="">
    <div class="row">
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
        </label>
        <div class="" id="sidebar">
            <header> Sakila</header>
            <?php include_once "componentes/comp_menu.php" ?>
        </div>
        <section class="cuerpo mt-2">
            <div class="container">
                <div class="col-md-7">
                    <h3 id="espacio-titulo"> <?php echo $nombrePagina; ?> </h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-5">
                            <form action="categoria.php" method="post">
                                <div class="mb-3">
                                    <label for="nombreCategoria">Nombre: </label>
                                    <input type="text" name="nombreCategoria" id="nombreCategoria" class="form-control"
                                           placeholder="Digite la categoría">
                                </div>

                                <div class="mb-3">
                                    <button type="submit" name="guardarCategoria" class="btn teal green accent-4">
                                        Guardar
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
                            ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($categorias as $categoria) {
                                    echo "<tr>
                            <th scope=\"row\">{$categoria['category_id']}</th>
                           <td>{$categoria['name']}</td>
                       </tr>";
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </section>
    </div>

</div>


</body>
</html>
