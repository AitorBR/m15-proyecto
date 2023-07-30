<?php

if (isset($_POST['idEvent']) && isset($_POST['idUser'])) {
    $idEvent = $_POST['idEvent'];
    $idUser = $_POST['idUser'];


    include 'connectPDO.php';
    $sentencia = $pdo->prepare('SELECT * FROM inscripcion WHERE id_usuarios = ? AND id_eventos = ?');
    $sentencia->execute([$idUser, $idEvent]);
    $datos = $sentencia->fetch(PDO::FETCH_OBJ);

    if ($datos === FALSE) {
        $sentencia = $pdo->prepare('INSERT INTO inscripcion(id_usuarios, id_eventos) VALUES (?,?);');
        $result = $sentencia->execute([$idUser, $idEvent]);
        if ($result === true) {
            echo "Te has unido al evento corretamente";
        } else {
            echo "Ha habido un error al unirse al evento";
        }
    } else {
        echo "Ya estas unido a este evento";
    }
}
