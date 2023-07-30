<?php
session_start();
if (isset($_POST['idEvent'])) {
    $idEvent = $_POST['idEvent'];

    include 'connectPDO.php';
    // ON DELETE CASCADE
    $data = $pdo->query("DELETE FROM inscripcion WHERE id_eventos=$idEvent")->fetchAll();
    $data = $pdo->query("DELETE FROM eventos WHERE id=$idEvent")->fetchAll();
    if ($data !== null) {
        echo "ok";
    } else {
        echo "no";
    }
}
