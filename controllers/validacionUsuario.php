<?php
session_start();
include_once 'connectPDO.php';

$mail = $_POST['mail'];
$pwd = $_POST['pwd'];


$sentencia = $pdo->prepare('SELECT * FROM usuarios WHERE mail = ? AND pswd = ?');
$sentencia->execute([$mail, $pwd]);
$datos = $sentencia->fetch(PDO::FETCH_ASSOC);
if ($datos === FALSE) {
    echo '<script type="text/javascript">
    alert("El usuario o contraseña no existe");
    window.location.href="/../views/login.php";
    </script>';

} elseif ($sentencia->rowCount() == 1) {
    $_SESSION['usuario'] = $datos;
    header('Location: /../controllers/showEvents.php');
}
