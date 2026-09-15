<?php
$pg = "contacto";
if ($_POST) {
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $telefono = $_POST["txtTelefono"];
    $mensaje = $_POST["txtMensaje"];
    //control de que no esten vacios
    if ($nombre != "" && $correo != "" && $telefono != "" && $mensaje != "") {
        //varios destinatarios
        $para      = 'XXXXXXXXXXXXXXXXXXXX';
        $titulo    = 'Recibiste un mensaje desde tu Web';
        // mensaje
        $cuerpo = "
    Nombre: $nombre <br>
    Correo: $correo <br>
    Telefono: $telefono <br>
    Mensaje: $mensaje <br>
    ";
        //para enviar un correo HTML, debe establecerse la cabecera Content-type
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        // Cabeceras adicionales
        $cabeceras .= 'To: hjcorti.07@gmail.com' . "\r\n";
        $cabeceras .= 'From: contacto@hugocorti.com.ar' . "\r\n";
        // Enviarlo
        //mail($para, $titulo, $cuerpo, $cabeceras);
        //echo "<script>alert('Mensaje enviado, Gracias por contactarnos');   HACE FALTA UN SERVIDOR DE ENVIOS PARA QUE FUNCIONE
        header('location:confimacion-envio.php');
    }
}





session_start();
$pagina = "contacto"  ?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div class="row align-items-center">
            <div class="col-12 col-sm-6">
                <p class="contact-intro">Te invito a que te contactes enviándome un mensaje o bien por WhatsApp. Estoy abierto a proyectos, consultas y oportunidades.</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST" class="contact-form" aria-label="Formulario de contacto">
                    <div class="pb-3">
                        <label for="txtNombre" class="form-label visually-hidden">Nombre</label>
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control shadow-sm" required autocomplete="name">
                    </div>
                    <div class="pb-3">
                        <label for="txtCorreo" class="form-label visually-hidden">Email</label>
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Email" class="form-control shadow-sm" required autocomplete="email">
                    </div>
                    <div class="pb-3">
                        <label for="txtTelefono" class="form-label visually-hidden">Teléfono/WhatsApp</label>
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/WhatsApp" class="form-control shadow-sm" autocomplete="tel">
                    </div>
                    <div class="pb-3">
                        <label for="txtMensaje" class="form-label visually-hidden">Mensaje</label>
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje" class="form-control shadow-sm" required></textarea>
                    </div>
                    <div class="d-flex justify-content-start">
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="container mt-auto pb-4">
        <div class="row align-items-center gy-3">
            <div class="col-12 col-md-3">
                <div class="redes-sociales">
                    <a href="https://www.linkedin.com/in/hugo-javier-corti-a1a595244/" target="_blank" title="Linkedin" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://github.com/hjcorti" target="_blank" title="Github" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-3">
                Sponsor <a href="https://academia.depcsuite.com/" target="_blank">DePcsuite</a>
            </div>
            <div class="col-12 col-md-3">
                <a href="mailto:hjcorti.07@gmail.com">hjcorti.07@gmail.com</a>
            </div>
            <div class="col-12 col-md-3 text-md-end">
                <a href="https://api.whatsapp.com/send?phone=543462573909" target="_blank" aria-label="Enviar WhatsApp"><i class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i></a>
            </div>
        </div>
    </footer>
</body>

</html>