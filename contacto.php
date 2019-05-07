<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto | Solucionestai</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.css">
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
            <div class="col-6">
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
                        <input type="submit" value="Enviar" name"enviar" id="enviar" class="btn bg-success text-white" style="width: 100%;">
                    </center>
                </form>
            </div>
            <!-- TERMINA FORMULARIO DE CONTACTO -->

            <div class="col-6 left">
                <h4>Información de contacto</h4>
                <li class="dropdown-divider" style="color: #000; backgound-color: #000;"></li>

            </div>
        </div>
    </div>
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