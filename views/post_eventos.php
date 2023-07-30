<?php
session_start();
$user = $_SESSION["usuario"];

//require_once __DIR__ . '/../controllers/joinEvent.php';

?>
<!DOCTYPE html>
<html>

<head>
    <title>Eventos</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../css/eventos.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
    function joinClickJS(idEvent, idUser) {
        $.ajax({
                data: {
                    "idEvent": idEvent,
                    "idUser": idUser
                },
                type: "POST",
                url: "../controllers/joinEvent.php"
            })
            .done(function(msg) {
                alert("Mensaje: " + msg);
            })
            .fail(function(jqXHR, textStatus, errorThrown) {
                if (console && console.log) {
                    console.log("La solicitud a fallado: " + textStatus);
                }
            });
    }
    function leaveClickJS(idEvent, idUser) {
        $.ajax({
                data: {
                    "idEvent": idEvent,
                    "idUser": idUser
                },
                type: "POST",
                url: "../controllers/leaveEvent.php"
            })
            .done(function(msg) {
                alert("Mensaje: " + msg);
            })
            .fail(function(jqXHR, textStatus, errorThrown) {
                if (console && console.log) {
                    console.log("La solicitud a fallado: " + textStatus);
                }
            });
    }
    </script>
</head>
<header>
    <?php
    include __DIR__  . '/header_user.html'
    ?>
</header>

<body>
    <div class="box">
        <?php
        $eventos = $_SESSION['eventos'];
        foreach ($eventos as $evento) {
            echo "<div class='eventos'>";
            echo "<div class='imgEvent'>
                <img class='imgEvent', src='../files/events/image/{$evento['id']}/{$evento['imagen']}'></img>
                </div>";

            $fechaInicioEvento = $evento['fecha_inicio'];
            $value =  $fechaInicioEvento;
            $fechaFinalEvento = $evento['fecha_final_cierre'];
            $value2 =  $fechaFinalEvento;
            echo "<div class='textEvent'>
                <div class='descripcion'>
                <p><b>{$evento['nombre']}</b></p>
                <p>{$evento['descripcion']}</p>
                </div>
                <div class='fecha'>
                <p>Hora inicio: <b>{$value}</b> <span class = 'espacio'></span> Hora final: <b>{$value2}</b></p>
                </div>
                </div>";
            echo "<div class='boton'>
                <button onclick='leaveClickJS({$evento['id']},{$user['id']})'> Abandonar </button>
                </div>";
            echo "<div class='boton'>
                <button onclick='joinClickJS({$evento['id']},{$user['id']})'> Unirse </button>
                </div>";
            echo "</div>";
        }
        ?>
    </div>
</body>
<footer>
    <?php
        include __DIR__  . '/footer.html'
        ?>
</footer>


</html>