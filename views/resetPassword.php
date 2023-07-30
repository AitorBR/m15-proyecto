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
        <h2>Restablecer contraseña</h2>
        <form action="/controllers/resetPassword.php" method="post">
            <div class="input-box">
                <input type="email" placeholder="Correo electrónico" name="mail" required>
            </div>

            <div class="input-box button">
                <input type="Submit" value="Restablecer">
            </div>
        </form>
</div>

</body>

</html>