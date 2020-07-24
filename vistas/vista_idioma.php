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
            <header>Sakila</header>
            <?php include_once "componentes/comp_menu.php" ?>
        </div>
        <section class="cuerpo mt-2">
            <div class="container">
                <div class="col-md-7">
                    <h3 id="espacio-titulo"> <?php echo $nombrePagina; ?> </h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-5">
                            <form action="idioma.php" method="post">
                                <div class="mb-3">
                                    <label for="nombreIdioma">Nombre: </label>
                                    <input type="text" name="nombreIdioma" id="nombreIdioma" class="form-control"
                                           placeholder="Digite el idioma">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="guardarIdioma" class="btn teal green accent-4">Guardar
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                <th scope="col">ID</th>
                                <th scope="col">Idioma</th>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($idiomas as $idioma) {
                                    echo "<tr>
                            <th scope=\"row\">{$idioma['language_id']}</th>
                            <td>{$idioma['name']}</td>
                          
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