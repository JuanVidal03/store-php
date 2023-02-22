<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <!-- css -->
    <link rel="stylesheet" href="../../css/styles.css">
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


    <!-- CRUD DE PRODUCTOS -->

    <div class="crud-container">

        <div class="form-add-products-container">
            <form class="form-add-products" action="" method="post" enctype="multipart/form-data">

                <div class="input-container">
                    <label for=txtId">ID Producto:</label>
                    <input type="text" id="txtId" name="txtId" placeholder="Ingresa ID del producto">
                </div>
                <div class="input-container">
                    <label for=txtName">Nombre Producto:</label>
                    <input type="text" id="txtName" name="txtName" placeholder="Ingresa el nombre del producto">
                </div>
                <div class="input-container">
                    <label for=txtDescription">Descripción Producto:</label>
                    <input type="text" id="txtDescription" name="txtDescription" placeholder="Ingresa la descripción del producto">
                </div>
                <div class="input-container">
                    <label for=txtImg">Imagen Producto:</label>
                    <input type="file" id="txtImg" name="txtImg" placeholder="Ingresa la imagen del producto">
                </div>

                <div class="btn-container">
                    <button class="btn-form-product green" type="button">Agregar</button>
                    <button class="btn-form-product yellow" type="button">Modificar</button>
                    <button class="btn-form-product red" type="button">Cancelar</button>
                </div>

            </form>
        </div>

        <div class="show-products-table">

            <table class="table-products">
                <thead class="table-head-products">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descipción</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody class="table-body-products">
                    <td>2</td>
                    <td>Camisa</td>
                    <td>Lorem ipsum dolor sit amet.</td>
                    <td>imgae.png</td>
                    <td>Seleccionar | Borrar</td>
                </tbody>
            </table>

        </div>

    </div>

    <!-- MIN 1:17:30 -->

<?php include('../template/footer.php');?>