
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/login-register.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="wrapper">
        <h2>Cambiar contraseña</h2>
        <form action="/controllers/updatePswd_user.php" method="post"> <!-- cambiar action-->
            <div class="input-box">
                <input type="password" name="pwd" placeholder="Crear contraseña" required>
            </div>
            <div class="input-box">
                <input type="password" name="pwdConfirm" placeholder="Confirma contraseña" required>
            </div>
            <div class="input-box button">
                <input type="Submit" value="Cambiar contrseña">
            </div>
        </form>
    </div>
</body>

</html>