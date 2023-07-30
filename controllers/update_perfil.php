<?php

session_start();

include_once 'connectPDO.php';
$name = $_POST['name'];
$surname = $_POST['surname'];
$date = $_POST['date'];
$direction = $_POST['direction'];
$telf = $_POST['telf'];
$dni = $_POST['dni'];
$carnet = $_POST['carnet'];
$user = $_SESSION["usuario"];

    $sentencia = $pdo->prepare('UPDATE usuarios SET nombre=?, apellidos=?, fecha_nacimiento=?, telefono=?, direccion=?, dni=?, carnetData=? WHERE id=?;');
    $result = $sentencia->execute([$name, $surname, $date, $telf, $direction, $dni, $carnet, $user['id']]);

    $_SESSION['usuario']['nombre'] = $_POST['name'];
    $_SESSION['usuario']['apellidos'] = $_POST['surname'];
    $_SESSION['usuario']['fecha_nacimiento'] = $_POST['date'];
    $_SESSION['usuario']['direccion'] = $_POST['direction'];
    $_SESSION['usuario']['telefono'] = $_POST['telf'];
    $_SESSION['usuario']['dni'] = $_POST['dni'];
    $_SESSION['usuario']['carnetData'] = $_POST['carnet'];

if ($result === TRUE) {
    echo '<script type="text/javascript">
    alert("Actualizado los datos de tu usuario");
    </script>';

    header('Location: /../views/post_eventos.php');
}else{
    echo '<script type="text/javascript">
    alert("Ha habido un error para actualizar tus datos");
    </script>';
}