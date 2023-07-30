<?php
session_start();
$user = $_SESSION["usuario"];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Perfil</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../css/perfil.css" rel="stylesheet" type="text/css">



</head>

<body>

    <div class="paper_profile">
        <h2>Bienvenid@ a tu perfil <?php echo $user['nombre']; ?></h2>
        <div class="input-box">
            <p id="name">Nombre:
                <?php echo $user['nombre']; ?>
            </p>
            <p id="surname">Apellidos:
                <?php echo $user['apellidos'] ?>
            </p>
            <p id="calle">Calle:
                <?php echo $user['direccion'] ?>
            </p>
            <p id="dni">DNI:
                <?php echo $user['dni'] ?>
            </p>
            <p id="telefono">Teléfono:
                <?php echo $user['telefono'] ?>
            </p>
            <p id="fecha de nacimiento">Fecha de Nacimiento:
                <?php echo $user['fecha_nacimiento'] ?>
            </p>
            <p id="carnet_voluntario">Carnet de voluntario (Fecha de caducidad):
                <?php echo $user['carnetData'] ?>
            </p>
        </div>

        <div class="alin">
            <a href="perfil_edit.php">
                <input type="Submit" value="Editar Perfil">
            </a>
        </div>
        <div class="alin">
            <a href="changePswd_user.php">
                <input type="Submit" value="Restablecer Password">
            </a>
        </div>
        <div class="alin">
            <a href="post_eventos.php">
                <input type="Submit" value="Atras">
            </a>
        </div>
        </a>
</body>

</html>