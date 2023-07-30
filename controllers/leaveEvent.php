<?php
session_start();

if (isset($_POST['idEvent']) && isset($_POST['idUser'])) {

    include 'connectPDO.php';

    $idUser = $_POST['idUser'];
    $idEvent = $_POST['idEvent'];

    $sentencia = $pdo->prepare('SELECT * FROM inscripcion WHERE id_usuarios = ? AND id_eventos = ?');
    $sentencia->execute([$idUser, $idEvent]);
    $esta = $sentencia->fetch(PDO::FETCH_OBJ);

    if ($esta !== false) {
        $sentencia = $pdo->prepare('DELETE FROM inscripcion WHERE id_usuarios = ? AND id_eventos = ?');
        $sentencia->execute([$idUser, $idEvent]);
        $datos = $sentencia->fetch(PDO::FETCH_OBJ);
        if (empty($datos)) {
            echo "Te has salido del evento correctamente";
        } else {
            echo "Ha habido un error al salir del evento";
        }
    } else {
        echo "No estas unido a este evento";
    }
}