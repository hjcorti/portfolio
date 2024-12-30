<?php
session_start();$pagina = "contacto"  ?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/HC.ICO">

    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>

</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
    <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviándome un mensaje o bien por Whatsapp</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre"
                            class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Email"
                            class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/WhatsApp"
                            class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje"
                            class="form-control shadow"></textarea>
                    </div>
                    <div class="float-start">
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="container mt-auto pb-4">
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