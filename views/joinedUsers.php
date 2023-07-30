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
    </script>
</head>
<header>
    <?php
    include __DIR__  . '/header_admin.html'
    ?>
</header>
<body>
    <div class="box2">
        <?php
        $users = $_SESSION['joinedUsers'];
        foreach ($users as $user) {
            echo "<div class='user-box'>";
            echo "<p id='name'>Nombre:";
            echo "{$user['nombre']}";
            echo "</p>";
            echo "<p id='surname'>Apellidos:";
            echo " {$user['apellidos']}";
            echo "</p>";
            echo "<p id='calle'>Calle:";
            echo "{$user['direccion']}";
            echo "</p>";
            echo "<p id='dni'>DNI:";
            echo "{$user['dni']}";
            echo "</p>";
            echo "<p id='telefono'>Teléfono:";
            echo "{$user['telefono']}";
            echo "</p>";
            echo "<p id='fecha de nacimiento'>Fecha de Nacimiento:";
            echo "{$user['fecha_nacimiento']}";
            echo "</p>";
            echo "<p id='carnet_voluntario'>Carnet de voluntario (Fecha de caducidad):";
            echo "{$user['carnetData']}";
            echo "</p>";
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