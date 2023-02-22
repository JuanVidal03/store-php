<?php 
    // verificando si hay un envio post
    if ($_POST) {
        // redirección a otra página en esta caso a 'home.php'
        header('Location:home.php');
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>
    <!-- css -->
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    
    <div class="login-container-page">
        <div class="login-container">

            <h5>Ingresa!</h5>
            <p>Ingresa tus credenciales</p>
            
            <form class="login-form" action="./index.php" method="post">
                <input type="text" name="user"  placeholder="Usuario">
                <input type="password" name="pass"  placeholder="Contraseña">
                <button class="login-submit" type="submit">ingresar</button>
            </form>

        </div>
    </div>

</body>
</html>