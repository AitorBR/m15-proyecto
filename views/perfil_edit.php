<?php
session_start();
$user = $_SESSION["usuario"];
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/login-register.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="wrapper">
        <h2>Editar Perfil</h2>
        <form action="../controllers/update_perfil.php" method="post">
            <div class="input-box">
                <input type="text" name="name" placeholder="Nombre de pila" value="<?php echo $user['nombre']; ?>" required>
            </div>
            <div class="input-box">
                <input type="text" name="surname" placeholder="Apellido" value="<?php echo $user['apellidos'];?>" required>
            </div>
            <div class="textIn">
                <h3>Fecha de nacimiento</h3>
            </div>
            <div class="input-box">
                <input type="date" name="date" id="start" name="trip-start" value="<?php echo $user['fecha_nacimiento'];?>" required>
            </div>
            <div class="input-box">
                <input type="text" name="direction" placeholder="Dirección" value="<?php echo $user['direccion'];?>" required>
            </div>
            <div class="input-box">
                <input type="tel" name="telf" placeholder="Teléfono" value="<?php echo $user['telefono'];?>" required>
            </div>
            <div class="input-box">
                <input type="text" name="dni" placeholder="Introduzca su DNI" pattern="[0-9]{8}[A-Za-z]{1}" value="<?php echo $user['dni'];?>" required>
            </div>
            <div class="textIn">
                <h3>Fecha del Carnet de socio</h3>
            </div>
            <div class="input-box">
                <input type="text" name="carnet" placeholder="Fecha de caducidad del carnet" value="<?php echo $user['carnetData'];?>" required>
            </div>
            <div class="input-box button">
                <input type="Submit" value="Guardar los cambios">
            </div>
        </form>
    </div>
</body>

</html>