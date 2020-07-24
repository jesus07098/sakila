<?php include_once "componentes/comp_head.php" ?>
<body>

<!-- Barra superior -->

<!-- Contenido -->

<div class="">
    <div class="row">
        <input type="checkbox" id="check">
        <label for="check">
            <i class="pulse" id="btn"><b class="fas fa-bars"></b></i>
            <i class="fas fa-times" id="cancel"></i>
        </label>
        <div class="" id="sidebar">
            <header>Sakila</header>
            <?php include_once "componentes/comp_menu.php" ?>
        </div>
        <section class="cuerpo mt-2">
            <div class="container">
                <div class="col-md-7">

                    <h3 id="espacio-titulo"><i class="fas fa-flag"></i> <?php echo $nombrePagina; ?> </h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-5">
                            <form action="pais.php" method="post">
                                <div class="mb-3">
                                    <label for="pais">País: </label>
                                    <input type="text" name="pais" id="pais" class="form-control"
                                           placeholder="Digite el país">
                                </div>

                                <div class="mb-3">
                                    <button type="submit" name="guardarPais" class="btn green accent-4">Guardar</button>
                                </div>

                            </form>

                        </div>

                    </div>
                    <?php
                    if (isset($mensaje)) {
                        echo "<div class=\"alert alert-danger\" role=\"alert\">
                                       {$mensaje}
                                </div>";
                    }
                    ?>

                    <div class="row">
                        <div class="col-md-10">
                            <hr>
                            <table class="table centered">
                                <thead>
                                <th scope="col">ID</th>
                                <th scope="col">Ciudad</th>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($paises as $pais) {
                                    echo "<tr>
                            <th scope=\"row\">{$pais['country_id']}</th>
                           <td>{$pais['country']}</td>
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


</body>
</html>