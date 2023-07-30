<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/login-register.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="wrapper">
        <h2>Registrar</h2>
        <form action="/controllers/checkUsuarioDatos.php" method="post">
            <div class="input-box">
                <input type="text" name="name" placeholder="Nombre de pila" required>
            </div>
            <div class="input-box">
                <input type="text"  name="surname" placeholder="Apellido" required>
            </div>
            <div class="textIn">
                <h3>Fecha de nacimiento</h3>
            </div>
            <div class="input-box">
                <input type="date" id="start" name="date" value="0000-00-00">
            </div>
            <div class="input-box">
                <input type="email" name="mail" placeholder="Correo electrónico" required>
            </div>
            <div class="input-box">
                <input type="password" name="pwd" placeholder="Crear contraseña" required>
            </div>
            <div class="input-box">
                <input type="password" name="pwdConfirm" placeholder="Confirma contraseña" required>
            </div>
            <div class="input-box">
                <input type="text" name="direction" placeholder="Dirección" required>
            </div>
            <div class="input-box">
                <input type="tel" name="telf" placeholder="Teléfono"  pattern="[0-9]{9}" required>
            </div>
            <div class="input-box">
                <input type="text" name="dni" placeholder="Introduzca su DNI" pattern="[0-9]{8}[A-Za-z]{1}" required>
            </div>
            <div class="textIn">
                <h3>Fecha del Carnet de socio</h3>
            </div>
            <div class="input-box">
                <input type="date" id="start" name="date_carnet" value="0000-00-00">
            </div>
            <div class="policy">
                <input type="checkbox" required>
                <h3>Acepto todos los terminos y condiciones</h3>
            </div>
            <div class="input-box button">
                <input type="Submit" value="Registrarse ahora">
            </div>
            <div class="text">
                <h3>¿Ya tienes una cuenta? <a href="login.php">Iniciar sesión</a></h3>
            </div>
        </form>
    </div>
</body>

</html>