<?php
session_start();

function validate($token)
{
    include_once 'connectPDO.php';
    $sentencia = $pdo->prepare('SELECT * FROM usuarios WHERE token = ?');
    $sentencia->execute([$token]);
    $datos = $sentencia->fetch(PDO::FETCH_ASSOC);
    if ($datos === FALSE) {
        header('Location: ../../views/login.php');
    } else {
        $fecha_actual = date("Y-m-d h:i:s");
        if ($datos['expireToken'] > $fecha_actual) {
            return $datos;
        } else {
            header('Location: ../../views/login.php');
        }
    }
}
