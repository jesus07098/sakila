<?php
include_once "componentes/comp_head.php";

?>
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
                    <h3 id="espacio-titulo"> <?php echo $nombrePagina; ?> </h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-5">
                            <form action="ciudad.php" method="post">
                                <div class="mb-3">
                                    <label for="ciudad">Ciudad: </label>
                                    <input type="text" name="ciudad" id="ciudad" class="form-control"
                                           placeholder="Digite la ciudad">
                                </div>
                                <div class="mb-3">
                                    <label for="pais">País: </label>
                                    <select name="pais" class="form-select" id="pais">
                                        <option value="" selected disabled>Seleccione un país:
                                        </option>
                                        <?php
                                        foreach ($paises as $pais)
                                            echo "<option value=\"{$pais['country_id']}\">{$pais['country']}</option>";
                                        ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" name="guardarCiudad" class="btn green accent-4">Guardar
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table centered ">
                                <thead>
                                <th scope="col">ID Ciudad</th>
                                <th scope="col">Nombre Ciudad</th>
                                <th scope="col">Nombre País</th>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($ciudades as $ciudad) {
                                    echo "<tr>
                            <th scope=\"row\">{$ciudad['city_id']}</th>
                           <td>{$ciudad['city']}</td>
                           <td>{$ciudad['country']}</td>
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