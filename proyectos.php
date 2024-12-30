<?php
session_start();$pagina = "proyectos"  ?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/HC.ICO">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>

</head>

<body id="proyectos" class="d-flex flex-column h-100">
    <header class="container">
    <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-12 mb-3">
                <div>
                    <div class="row boder proyecto pb-5">
                        <img src="images/abmclientes.png" alt="ABM Clientes" class="img-fluid">
                        <div>
                            <h2>ABM CLIENTES</h2>
                        </div>
                        <div>
                            <p class="py-2 px-3">Alta, Baja, Modificación de un registro de clientes. Realizado en HTML, CSS, PHP,
                                Bootstrap y
                                Json.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <a href="#" class="btn btn-rojo">Ver Online</a>
                            </div>
                            <div class="col-6 text-center">
                                <a href="#" class="link-rojo">Código Fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 mb-3">
                <div>
                    <div class="row border proyecto pb-5">
                        <img src="images/abmventas.png" alt="ABM Ventas" class="img-fluid">
                        <div class="col-12">
                            <h2>SISTEMA DE GESTIÓN DE VENTAS</h2>
                        </div>
                        <div class="col-12">
                            <p class="py-2 px-3">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC,
                                BOootstrap,
                                Js, Ajax, jQuery y MySQL de base de datos.</P>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <a href="#" class="btn btn-rojo">Ver Online</a>
                            </div>
                            <div class="col-6 text-center">
                                <a href="#" class="link-rojo">Código Fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 mb-3">
                <div class="row border proyecto pb-5">
                    <img src="images/proyecto-integrador.png" alt="Proyecto Integrador" class="img-fluid">
                    <div class="col-12">
                        <h2>PROYECTO INTEGRADOR</h2>
                    </div>
                    <div class="col-12">
                        <p class="py-2 px-3">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS,
                            Mercadopago
                            con panel administrador, gestión de usuarios, módulo de permisos y funcionalidades afines.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <a href="#" class="btn btn-rojo">Ver Online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="#" class="link-rojo">Código Fuente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="container mt-auto pb-4">
        <div class="row rojo">
            <div class="col-3">
                <a href="https://github.com/hjcorti" target="_blank" title="Github"><i
                        class="fa-brands fa-github rojo"></i></a>
                <a href="https://www.linkedin.com/in/hugo-javier-corti-a1a595244/" target="_blank" title="Linkedin"><i
                        class="fa-brands fa-linkedin rojo"></i></a>
            </div>
            <div class="col-3 rojo">
                Sponsor <a href="https://academia.depcsuite.com/" target="_blank" class="rojo">DePcsuite</a>
            </div>
            <div class="col-3 rojo">
                <a href="mailto:hjcorti.07@gmail.com" class="rojo">hjcorti.07@gmail.com</a>
            </div>
            <div class="col-3">
            </div>
        </div>
        <a href="https://api.whatsapp.com/send?phone=543462573909" target="_blank"><i
                class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i></a>
    </footer>
</body>

</html>