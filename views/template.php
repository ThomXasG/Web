<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="jquery/themes/black/easyui.css">
    <link rel="stylesheet" type="text/css" href="jquery/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="jquery/themes/color.css">
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script type="text/javascript" src="jquery/jquery.easyui.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styles.css">
    <title>UTA</title>
</head>

<body>
    <header>
        <img src="./img/header.png" alt="">
        <nav>
            <ul class="menu bg-red">
                <li><a href="index.php?action=inicio">Inicio</a></li>
                <li><a href="index.php?action=nosotros">Nosotros</a></li>
                <li><a href="index.php?action=login">Servicios</a></li>
                <li><a href="index.php?action=contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php
            $mvc = new MvcController();
            $mvc -> enlacesPaginasController();
        ?>
    </main>
    <footer class="bg-red">
        <h2 class="text-center">Copyright todos los derechos reservados &copy;</h2>
    </footer>
</body>
</html>