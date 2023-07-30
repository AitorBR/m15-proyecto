<?php
session_start();


function checkMailExist($mail){
include_once 'connectPDO.php';
$sentencia = $pdo->prepare('SELECT * FROM usuarios WHERE mail = ?');
$sentencia->execute([$mail]);
$datos = $sentencia->fetch(PDO::FETCH_OBJ);

if ($datos === FALSE) {
    echo '<script type="text/javascript">
    alert("El usuario o contraseña no existe");
    window.location.href="/../views/login_admin.php";
    </script>';

} elseif ($sentencia->rowCount() == 1) {
    header('Location: /../views/post_eventos.html');
}  
}

