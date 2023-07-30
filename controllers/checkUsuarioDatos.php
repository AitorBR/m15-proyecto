<?php
use AutoTest\Usuario;
session_start();

require_once __DIR__ . '/../vendor/autoload.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$fechaNacimiento = $_POST['date'];
$mail = $_POST['mail'];
$pwd = $_POST['pwd'];
$pwdConfirm = $_POST['pwdConfirm'];
$direction = $_POST['direction'];
$telf = $_POST['telf'];
$dni = $_POST['dni'];
$date_socio = $_POST['date_carnet'];



if ($pwd == $pwdConfirm) {
    $_SESSION['usuario'] = new Usuario(1,$name,$surname,$fechaNacimiento,$telf,$direction,$dni,$mail,$pwd,$date_socio); // meter los datos
    require_once  __DIR__ . '/insertUsuario.php';
}else{
    echo '<script type="text/javascript">
    alert("La contraseña no coincide");
    window.location.href="/../views/registerUser_view.php";
    </script>';
}


