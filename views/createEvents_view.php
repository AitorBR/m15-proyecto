<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/createEvents.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="wrapper">
        <h2>Publicar Evento</h2>
        <form action="../controllers/checkEventoDatos.php" method="post" enctype="multipart/form-data">

            <div class="input-box">
                <span> Introduce el nombre del evento:</span> <input type="text" name="name" required>
            </div>
            <br>
            <span>Descripcion:</span> <textarea name="textarea" rows="7" cols="50" required></textarea>
            
            <div class="input-box">
                
                Añadir imagen del evento: <input name="file" id="file" type="file" required/>
            </div>
            <div class="input-box">
                Fecha de inicio: <input type="datetime-local" name="date_start" id="date_event"
                    value="2022-05-12T19:30" required>
            </div>
            <div class="input-box">
                Fecha de finalización: <input type="datetime-local" name="date_end" id="date_end"
                    value="2022-05-12T19:30" required>
            </div>
            <div class="input-box button">
                <input type="Submit" value="Publicar evento" required>
            </div>

        </form>
    </div>
</body>

</html>