<?php

session_start();
//use AutoTest\Usuario;

function tokenUpdate($token, $dateExpire, $id)
{
    include 'connectPDO.php';
    $sentencia = $pdo->prepare('UPDATE usuarios SET token=? , expireToken=? WHERE id=?;');
    $result = $sentencia->execute([$token, $dateExpire, $id]);

    if ($result === TRUE) {
        echo '<script type="text/javascript">
        alert("Actualizado");
        window.location.href="/../views/login.php";
        </script>';

        header('Location: /../views/login.php');
    } else {
        echo '<script type="text/javascript">
        alert("No Actualizado");
        window.location.href="/../views/registerUser_view.php";
        </script>';
    }
}
