<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio | Solucionestai</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <!-- IMPORTACION DE CABECERA -->
    <?php include_once("partials/header.php"); ?>

    <!-- CONTENIDO -->
    <!-- Productos -->
    <div class="container">
        <h2>Conoce nuestros porductos</h2>
        <div class="row">
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#" id="computo" data-target="#modal-computo" data-toggle="modal">
                        <img class="card-img-top" src="http://placehold.it/700x400" alt="Computo">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Computo</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra
                            euismod odio,
                            gravida pellentesque urna varius vitae.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#" id="comunicacion"><img class="card-img-top" src="http://placehold.it/700x400"
                            alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Comunicaciones</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra
                            euismod odio,
                            gravida pellentesque urna varius vitae.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#" id="publicidad"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Publicidad</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra
                            euismod odio,
                            gravida pellentesque urna varius vitae.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#" data-target="#modal-control" data-toggle="modal"><img class="card-img-top"
                            src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Control</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra
                            euismod odio,
                            gravida pellentesque urna varius vitae.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#" id="soporte"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Soporte</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra
                            euismod odio,
                            gravida pellentesque urna varius vitae.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#" id="seguridad"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Seguridad</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra
                            euismod odio,
                            gravida pellentesque urna varius vitae.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <!-- Slider productos estrella -->
    
    <div class="container d-none d-lg-block">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="http://placehold.it/1900x1080" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. </h5>
                        <p>Necessitatibus id, cum totam repellat quaerat atque alias error?</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="http://placehold.it/1900x1080" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. </h5>
                        <p>Necessitatibus id, cum totam repellat quaerat atque alias error?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="http://placehold.it/1900x1080" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. </h5>
                        <p>Necessitatibus id, cum totam repellat quaerat atque alias error?</p>
                    </div>
                </div>

                <!-- <div class="carousel-item active">
                    <img class="d-block w-100" src="http://placehold.it/1900x1080" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://placehold.it/1900x1080" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://placehold.it/1900x1080" alt="Third slide">
                </div> -->
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <!-- Page Content -->
    <div class="container">
        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2>No lo pienses mas contáctanos</h2>
                <p>DIRECCIÓN :<br>
                    Periférico paseo de la república #4076 Fracc. Jardines de la Loma.<br>
                    <br>
                    E-MAIL :<br>
                    solucionestai@hotmail.com <br>
                    efuentesr08@hotmail.com <br>
                    <br>
                    TELÉFONOS: <br>
                    (443) 3085990 <br>
                    (443) 6901909 <br>
                    <br>
                    WhatsApp: <br>
                    4431724242</p>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.83192497775!2d-101.22705768557591!3d19.677174737914353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf42d8e70f4317ff!2sSolucionestai+%22Soluciones+con+tecnolog%C3%ADa%22!5e0!3m2!1ses!2smx!4v1556562170881!5m2!1ses!2smx"
                    width="540" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>


    <!-- Modales -->
    <!-- Modal computo -->
    <div class="modal fade" id="modal-computo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Computo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid quas veritatis neque delectus
                    consectetur
                    accusantium architecto eaque eligendi optio, adipisci beatae est, tempore a nihil dolor unde? Eum,
                    error
                    ducimus?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Ver productos</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal comunicaciones -->
    <div class="modal fade" id="modal-com" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Comunicaciones</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid quas veritatis neque delectus
                    consectetur
                    accusantium architecto eaque eligendi optio, adipisci beatae est, tempore a nihil dolor unde? Eum,
                    error
                    ducimus?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Ver productos</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal publicidad -->
    <div class="modal fade" id="modal-publicidad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Publicidad</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid quas veritatis neque delectus
                    consectetur
                    accusantium architecto eaque eligendi optio, adipisci beatae est, tempore a nihil dolor unde? Eum,
                    error
                    ducimus?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Ver productos</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal seguridad -->
    <div class="modal fade" id="modal-seguridad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Seguridad</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid quas veritatis neque delectus
                    consectetur
                    accusantium architecto eaque eligendi optio, adipisci beatae est, tempore a nihil dolor unde? Eum,
                    error
                    ducimus?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Ver productos</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal soporte -->
    <div class="modal fade" id="modal-soporte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Soporte</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid quas veritatis neque delectus
                    consectetur
                    accusantium architecto eaque eligendi optio, adipisci beatae est, tempore a nihil dolor unde? Eum,
                    error
                    ducimus?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Ver productos</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal control -->
    <div class="modal fade" id="modal-control" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Control</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid quas veritatis neque delectus
                    consectetur
                    accusantium architecto eaque eligendi optio, adipisci beatae est, tempore a nihil dolor unde? Eum,
                    error
                    ducimus?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Ver productos</button>
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
        if (pagina == "/solucionestai/soluciones/" || pagina == "/solucionestai/soluciones/index.php") {
            $("#link-inicio").addClass("active");
        } else {
            $("#link-inicio").removeClass("active");
        }
        $('.carousel').carousel({
            interval: 2000
        });
    });

    $(function() {
        $('#computo').click(function() {
            $('#modal-computo').modal();
        });

        $('#comunicacion').click(function() {
            $('#modal-com').modal();
        });

        $('#seguridad').click(function() {
            $('#modal-seguridad').modal();
        });

        $('#publicidad').click(function() {
            $('#modal-publicidad').modal();
        });

        $('#soporte').click(function() {
            $('#modal-soporte').modal();
        });

        $('#control').click(function() {
            $('#modal-control').modal();
        });
    });
    </script>
</body>
<br>
<br>
<br>
<?php include_once("partials/footer.php");?>

</html>