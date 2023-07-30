<?php
session_start();

use AutoTest\Usuario;

include_once 'connectPDO.php';
require __DIR__ . '/phpMail.php';
require_once __DIR__ . '/updateToken.php';


$mail = $_POST['mail'];
$sentencia = $pdo->prepare('SELECT * FROM usuarios WHERE mail = ?');

$sentencia->execute([$mail]);
$datos = $sentencia->fetch(PDO::FETCH_ASSOC);
if ($datos === FALSE) {
    echo '<script type="text/javascript">
    window.location.href="/../views/login.php";
    </script>';
} else {
    sendMailAutomatically($mail, $datos['id']);
    $_SESSION['idPswd'] = $datos['id'];
}
