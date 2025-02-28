<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/autoload.php';

session_start();

// Verificación de límite de intentos (máximo 5 envíos por minuto)
if (!isset($_SESSION['last_submission']) || time() - $_SESSION['last_submission'] > 60) {
    $_SESSION['submission_count'] = 0; // Reinicia el contador después de un minuto
}
if (isset($_SESSION['submission_count']) && $_SESSION['submission_count'] >= 5) {
    die('Has excedido el número máximo de envíos permitidos. Por favor, inténtalo más tarde.');
}

// Verificación de campo honeypot (para bots)
if (!empty($_POST['honeypot'])) {
    die('Acción no permitida.');
}

// Validación de reCAPTCHA
$secretKey = '6LfD1uIqAAAAAIkWUkKP_jIK6Mr6Osog4wWLpUOx'; // reemplaza con tu clave secreta de Google reCAPTCHA
$response = $_POST['g-recaptcha-response'];

$verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response");
$responseKeys = json_decode($verifyResponse, true);

if (intval($responseKeys["success"]) !== 1) {
    die('Por favor, completa el reCAPTCHA.');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // Configuración de PHPMailer
    $mail = new PHPMailer(true); 

    try {
        // Configuración SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@webinnovatorstudio.com';
        $mail->Password = 'nfdOOtXU?j1';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // De y a dirección de correo
        $mail->setFrom('info@webinnovatorstudio.com', 'Web Innovator Studio');
        $mail->addAddress('info@webinnovatorstudio.com');
        $mail->addReplyTo($correo, $nombre);

        // Cuerpo del correo
        $mail->isHTML(false);
        $mail->Subject = "Mensaje del sitio web";
        $mail->Body = "Nombre: $nombre\nCorreo: $correo\nTeléfono: $telefono\nTitle: $title\nMensaje: $message";

        // Enviar correo
        $mail->send();

        // Actualizar la sesión para el control de envío
        $_SESSION['submission_count'] = isset($_SESSION['submission_count']) ? $_SESSION['submission_count'] + 1 : 1;
        $_SESSION['last_submission'] = time();

        // Respuesta de éxito
        echo "<script>alert('Gracias, tus datos han sido recibidos.'); window.location.href = 'https://webinnovatorstudio.com/index.php';</script>";
    } catch (Exception $e) {
        // Respuesta de error
        echo "<script>alert('Error al enviar el correo: {$mail->ErrorInfo}'); window.location.href = 'https://webinnovatorstudio.com/index.php';</script>";
    }
}
?>
