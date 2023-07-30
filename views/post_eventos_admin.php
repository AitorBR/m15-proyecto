<?php
session_start();

//require_once __DIR__ . '/../controllers/joinEvent.php';

?>
<!DOCTYPE html>
<html>

<head>
    <title>Eventos</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../css/eventos.css" rel="stylesheet" type="text/css" />
    <link href="..\css\styleheader.css" rel="stylesheet" type="text/css" />
    <link href="..\css\styleheader2.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<header>
    <?php
    include __DIR__  . '/header_admin.html'
    ?>
    <script>
        function joinClickJS(idEvent) {
            $.ajax({

                    data: {
                        "idEvent": idEvent
                    },
                    type: "POST",
                    url: "../controllers/joinEventShowToAdmin.php"
                })
                .done(function(msg) {
                    if (msg == "ok") {
                        //header("Location: /../views/joinedUsers.php");
                        window.location.href = "../views/joinedUsers.php"
                    } else if (msg == "no") {
                        //window.location.href = "../views/joinedUsers.php"
                        alert("No hay usuarios unidos");
                    }
                })
                .fail(function(jqXHR, textStatus, errorThrown) {
                    if (console && console.log) {
                        console.log("La solicitud a fallado: " + textStatus);
                    }
                });

        }
        function deleteClickJS(idEvent) {
            $.ajax({

                    data: {
                        "idEvent": idEvent
                    },
                    type: "POST",
                    //dataType: "json",
                    url: "../controllers/deleteEventAdmin.php"
                })
                .done(function(msg) {
                    if (msg == "ok") {
                        //header("Location: /../views/joinedUsers.php");
                        window.location.href = "../controllers/showEventsAdmin.php"
                    } else if (msg == "no") {
                        //window.location.href = "../views/joinedUsers.php"
                        alert("No se ha podido eleminar");
                    }
                })
                .fail(function(jqXHR, textStatus, errorThrown) {
                    if (console && console.log) {
                        console.log("La solicitud a fallado: " + textStatus);
                    }
                });
        }
    </script>
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
            <button onclick='deleteClickJS({$evento['id']})'> Eliminar evento </button>
                <button onclick='joinClickJS({$evento['id']})'> Mostrar usuarios </button>
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