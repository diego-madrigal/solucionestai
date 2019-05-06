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

    
    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        
        var pagina = window.location.pathname;
        $(document).ready(function(){
            if(pagina == "/solucionestai/soluciones/contacto" || pagina == "/solucionestai/soluciones/contacto.php"){
                $("#link-contacto").addClass("active");
            }else{
                $("#link-contacto").removeClass("active");
            }
        }); 
    </script>
</body>
</html>