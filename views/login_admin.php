<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/login-register.css" rel="stylesheet" type="text/css">
    <link href="../css/popup.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="wrapper">
        <h2>Iniciar sesión</h2>
        <form action="/controllers/validacionUsuarioAdmin.php" method="post">
            <div class="input-box">
                <input type="text" placeholder="Usuario" name="name" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Contraseña" name="pwd" required>
            </div>
            <div class="input-box button">
                <input type="Submit" value="Iniciar sesión">
            </div>
            <div class="text">
                <h3>¿Usuario normal? <a href="login.php">Iniciar sesión</a></h3>
            </div>
        </form>
    </div>
</body>

</html>