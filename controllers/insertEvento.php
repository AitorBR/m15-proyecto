<?php
session_start();

function insertEvent(){
    include_once 'connectPDO.php';
    $event = $_SESSION['eventoGenerado'];
    $sentencia = $pdo->prepare('INSERT INTO eventos(nombre, fecha_creacion, fecha_inicio, fecha_final_cierre, imagen, descripcion) VALUES (?,?,?,?,?,?);');
    $result = $sentencia->execute([$event->getNombre(), $event->getFecha_publicacion(), $event->getFecha_inicio(), $event->getFecha_final(), $event->getImagen(), $event->getDescripcion()]);
    if ($result === TRUE) {
        if(sendFileToServer($event->getImagen(),$pdo->query("SELECT LAST_INSERT_ID()")->fetchAll())) {
            header('Location: /controllers/showEventsAdmin.php');
        }
    } else {
        echo '<script type="text/javascript">
        alert("Ha habido un error al insertar el evento");
        window.location.href="/../views/createEvents_view.php";
        </script>';
    }
}
