<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!-- css -->
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

    <!-- redireccion con el nombre del dominio, redirecciona a la pagina principal-->
    <?php $url = 'http://'.$_SERVER['HTTP_HOST'].'/WEBSITE'; ?>

    <nav class="admin-navbar">
        <ul class="admin-nav">
            <div class="admin-nav-rest-items">
                <li class="admin-nav-list-item"><a class="admin-nav-item" href="<?php echo $url.'/admin/home.php' ?>">Admin</a></li>
                <li class="admin-nav-list-item"><a class="admin-nav-item" href="<?php echo $url.'/admin/section/products.php' ?>">Productos</a></li>
                <li class="admin-nav-list-item"><a class="admin-nav-item" href="<?php echo $url;?>">Ver Sitio Web</a></li>
            </div>
            <div class="admin-nav-get-out-item">
                <li class="admin-nav-list-item"><a class="admin-nav-item get-out-btn" href="<?php echo $url.'/admin' ?>">Salir</a></li>
            </div>
        </ul>
    </nav>