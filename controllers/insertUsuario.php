<?php
session_start();
include_once 'connectPDO.php';
$user = $_SESSION['usuario'];
$sentencia = $pdo->prepare('SELECT * FROM usuarios WHERE mail = ?');
$sentencia->execute([$user->getMail()]);
$datos = $sentencia->fetch(PDO::FETCH_OBJ);


if ($datos === FALSE) {
    $sentencia = $pdo->prepare('INSERT INTO usuarios(nombre, apellidos, fecha_nacimiento, telefono, direccion, dni, mail, pswd, carnetData, token, expireToken) VALUES (?,?,?,?,?,?,?,?,?,?,?);');
    $result = $sentencia->execute([$user->getNombre(), $user->getApellidos(), $user->getFecha_nacimiento(), $user->getTelefono(), $user->getDireccion(), $user->getDni(), $user->getMail(), $user->getPswd(), $user->getCarnetData(), "", "0000-00-00 00:00:00"]);
    if ($result === TRUE) {
        echo '<script type="text/javascript">
        alert("Usuario creado");
        </script>';

        header('Location: /../views/login.php');
    } else {
        echo '<script type="text/javascript">
        alert("Ha habido un error al registrar el usuario");
        window.location.href="/../views/registerUser_view.php";
        </script>';
    }
} else {
    echo '<script type="text/javascript">
    alert("Ha habido un error al registrar el usuario");
    </script>';
    header('Location: /../views/registerUser_view.php');
}
