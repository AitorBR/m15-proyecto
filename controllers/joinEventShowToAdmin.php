<?php
session_start();
if (isset($_POST['idEvent'])) {
    $idEvent = $_POST['idEvent'];

    include 'connectPDO.php';
    $data = $pdo->query("SELECT * FROM inscripcion i INNER JOIN usuarios u ON i.id_usuarios = u.id WHERE i.id_eventos=$idEvent")->fetchAll();
    if (empty($data)) {
        echo "no";
    } else {
        $_SESSION['joinedUsers'] = $data;
        echo "ok";
    }
}
