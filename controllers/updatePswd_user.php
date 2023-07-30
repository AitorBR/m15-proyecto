<?php
session_start();
include_once 'connectPDO.php';
$pwd = $_POST['pwd'];
$pwdConfirm = $_POST['pwdConfirm'];

$user = $_SESSION["usuario"];

if ($pwd == $pwdConfirm) {
    $sentencia = $pdo->prepare('UPDATE usuarios SET pswd=? WHERE id=?;');
    $result = $sentencia->execute([$pwd, $user['id']]);
}



if ($result === FALSE) {
    echo '<script type="text/javascript">
    alert("No Actualizado");
    </script>';
}else{
    echo '<script type="text/javascript">
    alert("Actualizado");
    </script>';
    header('Location: /../views/login.php'); 
}