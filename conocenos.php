<?php
    #
    #   Solucionestai -> Conocenos
    #   Por: Arturo Andrade Molina
    #
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conocenos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php
        include_once "partials/header.php";
    ?>
    <div class="container">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                <h1>Conocenos</h1><br>
                <p>
                    Soluciones<strong>tai</strong> es una empresa dedicada a solucionar las necesidades tecnológicas de
                    tu empresa, negocio u hogar de una manera rápida, eficiente y accesible.
                </p>
                </div>
                <div class="col-lg-2 hidden-lg-down">
                    <img src="img/logo.png" alt="Solucionestai" srcset="">
                </div>
            </div>
        </div>
        <br>
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            Misión
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        Ser una empresa comprometida con sus gente y proveedores, aprovechando nuestra capacidad de
                        adaptarnos
                        y solucionar las necesidades de la sociedad para así ayudarlos a Optimizar, automatizar,
                        asegurar y
                        mantener sus recursos por medio de soluciones tecnológicas de calidad, ofreciendo un servicio
                        personalizado,
                        eficaz y de calidad.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Visión
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        Ser reconocidos como la principal opción para soluciones tecnológicas, Consolidándonos como la
                        empresa
                        líder de soluciones tecnológicas a nivel Michoacán, ofreciendo un servicio de calidad, en tiempo
                        y a
                        un bajo costo.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Valores
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        Cordialidad, Compromiso, Responsabilidad, Liderazgo y Perseverancia.”
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    var pagina = window.location.pathname;
    $(document).ready(function() {
        if (pagina == "/solucionestai/soluciones/conocenos" || pagina ==
            "/solucionestai/soluciones/conocenos.php") {
            $("#link-conocenos").addClass("active");
        } else {
            $("#link-conocenos").removeClass("active");
        }


    });
    </script>
</body>
<?php
    include_once "partials/footer.php";
?>
</html>