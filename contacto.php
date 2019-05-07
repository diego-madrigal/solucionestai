<?php
    #
    #   CONTACTO - SOLUCIONESTAI
    #   
    #   CODIGO ESCRITO POR: ARTURO ANDRADE
    #   
    #   ======================================================================
    #
    #   ESTANCIA Y ESTADÍA EN SECTOR PRODUCTIVO
    #   UNIVERSIDAD TECNOLÓGICA DE MORELIA
    #   TECNOLOGÍAS DE LA INFORMACIÓN Y LA COMUNICACIÓN
    #   AREA DE SISTEMAS INFORMÁTICOS
    #

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto | Solucionestai</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.css">
    <style>
    
        .fab{
            color: grey;
            font-size: 36px;
            margin-right: 5px;
        }
        
        .fa-facebook-square:hover{
            color: #3D5B99;
        }

        .fa-twitter:hover{
            color: #5EAADE;
        }

        .fa-instagram:hover{
            color: #F9CA5E;
        }

        .fa-youtube:hover{
            color: red;
        }

        .fa-facebook-messenger:hover{
            color: 	#447BBC;
        }

        .fa-whatsapp{
            padding-left: 5px;
            padding-right: 5px;
            padding-top: 2px;
            padding-bottom: 2px;
        }

        .fa-whatsapp:hover{
            color:white;
            background-color: #1B9F0E;
            border-radius: 130%;
        }

        @media only screen and (max-width: 700px){
            .espacio{
                margin-bottom: 40px;
            }

            .datos{
                margin-bottom: 15px;
                text-align: center;
            }
        }
    
    </style>
</head>

<body>
    <!-- IMPORTACION DE CABECERA -->
    <?php include_once("partials/header.php"); ?>

    <!-- CONTENIDO DE LA PÁGINA -->
    <div class="container">

        <br>
        <h1>Contactanos</h1><br>
        <!-- INICIA FORMULARIO DE CONTACTO -->
        <div class="row">
            <div class="col-md-6 espacio">
                <h4>Escribe un mensaje</h4>
                <div class="dropdown-divider"></div>
                <form action="" method="post">
                    <label for="nombre">Escribe tu nombre:</label>
                    <input type="text" id="nombre" class="form-control" placeholder="Nombre">
                    <label for="email">Correo electrónico</label>
                    <input type="text" id="email" class="form-control" placeholder="Correo electrónico">
                    <label for="comentario">Comentarios</label>
                    <textarea name="comentario" id="comentario" cols="30" rows="10" class="form-control"></textarea><br>
                    <center>
                        <input type="submit" value="Enviar" name"enviar" id="enviar" class="btn bg-success text-white"
                            style="width: 100%;">
                    </center>
                </form>
            </div>
            <!-- TERMINA FORMULARIO DE CONTACTO -->

            <div class="col-md-6">
                <div class="row">
                    <div class="col-12">
                        <h4>Información de contacto</h4>
                        <li class="dropdown-divider" style="color: #000; backgound-color: #000;"></li>
                        <h5>Dirección</h5>
                        <p>Paseo periférico de la república # 4076 Fracc. Jardines de la loma.<br><a href="#mapa">Ver en
                                el
                                mapa</a></p>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-5 datos">
                            <h5>E-mail</h5>
                            <a href="mailto:solucionestai@hotmail.com">solucionestai@hotmail.com</a><br>
                            <a href="mailto:efuentesr08@hotmail.com">efuentesr08@hotmail.com</a>
                        </div>
                        <div class="col-md-5 datos">
                            <h5>Telefono:</h5>
                            <a href="tel:+4433085990">(443) 308 5990</a><br>
                            <a href="tel:+4436901909">(443) 690 1909</a>
                        </div>
                </div><br>
                <div class="row">
                    <div class="col-12">
                    <center>
                        <h5>Visita nuestras redes sociales</h5>
                        <a href="https://www.facebook.com/pg/Solucionestai/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                        <a href="https://twitter.com/solucionestai" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/solucionestai/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCnPQraOsv16pozEukfsMvvg" target="_blank"><i class="fab fa-youtube"></i></a>
                    
                    <br>
                    <li class="dropdown-divider"></li>
                    <div class="divider"></div>
                    <h5>O escribenos un mensaje directo</h5>
                        <a href="https://www.messenger.com/t/310907603104" target="_blank"><i class="fab fa-facebook-messenger"></i></a>
                        <a href="https://wa.me/4431724242" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    
    <iframe id="mapa"
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3756.871329797909!2d-101.22390484546565!3d19.675494125610594!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf42d8e70f4317ff!2sSolucionestai+%22Soluciones+con+tecnolog%C3%ADa%22!5e0!3m2!1ses!2smx!4v1557243735492!5m2!1ses!2smx"
        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


    <?php include_once("partials/footer.php"); ?>
    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    var pagina = window.location.pathname;
    $(document).ready(function() {
        if (pagina == "/solucionestai/soluciones/contacto" || pagina ==
            "/solucionestai/soluciones/contacto.php") {
            $("#link-contacto").addClass("active");
        } else {
            $("#link-contacto").removeClass("active");
        }


    });
    </script>
</body>

</html>