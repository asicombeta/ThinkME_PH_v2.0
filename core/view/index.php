<?php


// Iniciar la sesión
// session_start();

// // Verificar si el usuario está logeado
// // if (!isset($_SESSION['usuario']) && empty($_SESSION['usuario'])) {

// //     header('Location: login.php');

// // }


// echo 'has ingresado';


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/node_modules/@fortawesome/fontawesome-free/css/all.css">
</head>

<body>

    <!-- SIDEBAR -->

    <section id="sidebar">

        <a href="#" class="brand">
            <i class="fa-regular fa-lightbulb"></i>
            <span> <img src="/assets/img/logo-thinkme-white.png" alt="logo-thinkme"></span>
        </a>

        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class="fa-sharp fa-solid fa-chart-line"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-file-signature"></i>
                    <span>Nuevo</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-file-import"></i>
                    <span>Masivo</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <span>Historial</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-people-arrows"></i>
                    <span>Clientes</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-users"></i>
                    <span>Usuarios</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-comments"></i>
                    <span>Comentarios SAC</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-dove"></i>
                    <span>Mensajeros</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-file-circle-check"></i>
                    <span>Facturación</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-rotate"></i>
                    <span>Remapeos</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-route"></i>
                    <span>Multitraking</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-check-to-slot"></i>
                    <span>CP Check</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-print"></i>
                    <span>Reimpresión</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-spinner"></i>
                    <span>EPH Load</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-check"></i>
                    <span>EPH Load Ready</span>
                </a>
            </li>
        </ul>

    </section>

    <!-- END SIDEBAR -->
<script src="/core/js/main.js"></script>
</body>

</html>