<?php
session_start();
include_once 'connectPDO.php';

$name = $_POST['name'];
$pwd = $_POST['pwd'];


$sentencia = $pdo->prepare('SELECT * FROM admins WHERE nombre = ? AND pswd = ?');
$sentencia->execute([$name, $pwd]);
$datos = $sentencia->fetch(PDO::FETCH_ASSOC);

if ($datos === FALSE) {
    echo '<script type="text/javascript">
    alert("El usuario o contraseña no existe");
    window.location.href="/../views/login_admin.php";
    </script>';

} else if ($sentencia->rowCount() == 1) {
    header('Location: /../controllers/showEventsAdmin.php');
}