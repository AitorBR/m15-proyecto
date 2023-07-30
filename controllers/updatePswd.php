<?php

session_start();


include_once 'connectPDO.php';
$pwd = $_POST['pwd'];
$pwdConfirm = $_POST['pwdConfirm'];
$id = $_SESSION['idPswd'];

if ($pwd == $pwdConfirm) {
    $sentencia = $pdo->prepare('UPDATE usuarios SET pswd=? WHERE id=?;');
    $result = $sentencia->execute([$pwd, $id]);
}



if ($result === TRUE) {
    echo '<script type="text/javascript">
    alert("Actualizado");
    </script>';

    header('Location: /../views/login.php');
}else{
    echo '<script type="text/javascript">
    alert("No Actualizado");
    </script>';
}