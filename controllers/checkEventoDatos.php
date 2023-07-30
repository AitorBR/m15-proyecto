<?php

use AutoTest\Evento;

session_start();

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/insertEvento.php';

$name = $_POST['name'];
$descripcion = $_POST['textarea'];
$imagen = $_FILES['file']['name'];
$date_start = $_POST['date_start'];
$date_finish = $_POST['date_end'];

if (checkDates($date_start, $date_finish) == TRUE) {
    if (checkExtension($imagen) == TRUE) {
        $_SESSION['eventoGenerado'] = new Evento(1, $name, $descripcion, $imagen, $date_start, $date_finish);
        insertEvent();
    }
}

function checkExtension($image)
{
    $file_ext = explode('.', $image);
    $file_ext_lower = strtolower(end($file_ext));
    $permit_ext = array('jpg', 'png');
    if (in_array($file_ext_lower, $permit_ext)) {
        return true;
    } else {
        echo '<script type="text/javascript">
        alert("Extensión incorrecta de la imagen. Válido JPG, PNG");
        window.location.href="/../views/createEvents_view.php";
        </script>';
    }
}


function checkDates($date_start, $date_finish)
{
    if ($date_finish > $date_start) {
        return true;
    } else {
        echo '<script type="text/javascript">
        alert("Fecha de inicio nunca puede ser mayor a la de finalicación");
        window.location.href="/../views/createEvents_view.php";
        </script>';
    }
}

function sendFileToServer($file_name,$id)
{
            $carpeta = '../files/events/image/' . $id[0]['LAST_INSERT_ID()'] . '/'; //Declaramos el nombre de la carpeta que guardara los archivos
            if (!file_exists($carpeta)) {
                mkdir($carpeta, 0777, true) or die("Hubo un error al crear el directorio de almacenamiento");;
            }

            $fichero_subido = $carpeta . basename($file_name);
            if (move_uploaded_file($_FILES['file']['tmp_name'], $fichero_subido)) { //duda, probar.
                return true;
            } else {
                echo '<script type="text/javascript">
                alert("Ha habido un error al subir la imagen");
                window.location.href="/../views/createEvents_view.php";
                </script>';
            }
}