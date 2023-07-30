<?php
require __DIR__ . '/../includes/PHPMailer.php';
require __DIR__ . '/../includes/SMTP.php';
require __DIR__ . '/../includes/Exception.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMailAutomatically($mailUser, $id)
{
	$fecha_actual = date("Y-m-d h:i:s");
	$tokengenerated = createToken();
	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "tls";
	$mail->Port = "587";
	$mail->Username = "pruebasaccp@gmail.com";
	$mail->Password = "prodis2022";
	$mail->Subject = "Restablecer password Prodis";
	$mail->setFrom('pruebasaccp@gmail.com');
	$mail->Body = "Adjuntamos el enlace para que puedas restablecer el password, tienes un período de 24h.   http://localhost:3000/views/changePswd.php/?token=" . $tokengenerated;
	$mail->addAddress($mailUser);
	if ($mail->send()) {
		tokenUpdate($tokengenerated, date("Y-m-d h:i:s", strtotime($fecha_actual . "+ 1 days")), $id);
	} else {
		echo '<script type="text/javascript">
			alert("Se ha producido un error con el servidor del mail");
			window.location.href="/../views/login.php";
		</script>';
	}
	//Closing smtp connection
	$mail->smtpClose();
}


function createToken()
{
	$token = bin2hex(random_bytes(16));
	return $token;
}