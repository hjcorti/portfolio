<?php
session_start();$pagina = "inicio"  ?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="images/HC.ICO">


</head>

<body id="index" class="d-flex flex-column h-100">
    <header class="container">        
        <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-4 text-center div-cohete mx-auto">
                <a href="proyectos.php"><img src="images/cohete.svg" alt="imagen cohete" class="mx-auto"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center mb-3 offset-sm-3">
                <p class="p-1 my-3">Bienvenid@ a mi sitio web sobre docencia en sistemas</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="proyectos.php"class="btn boton-blancoo">Conoce mis proyectos</a>
            </div>
        </div>



    </main>
    <footer class="container mt-auto">
        <div class="row">
            <div class="col-3">
                <a href="https://www.linkedin.com/in/hugo-javier-corti-a1a595244/" target="_blank" title="Linkedin"><i
                        class="fa-brands fa-linkedin"></i></a>
                <a href="https://github.com/hjcorti" target="_blank" title="Github"><i
                        class="fa-brands fa-github"></i></a>

            </div>
            <div class="col-3">
                Sponsor <a href="https://academia.depcsuite.com/" target="_blank">DePcsuite</a>
            </div>
            <div class="col-3">
                <a href="mailto:hjcorti.07@gmail.com">hjcorti.07@gmail.com</a>
            </div>
            <div class="col-3">

            </div>

        </div>
        <a href="https://api.whatsapp.com/send?phone=543462573909" target="_blank"><i
                class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i></a>

    </footer>
</body>

</html>