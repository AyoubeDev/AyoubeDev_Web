<?php
// CONFIGURACIÓN MAILTRAP
$MAILTRAP_API_TOKEN = "84ad86c2d33abd060bbdc10d7857ed46";
$INBOX_ID = "4452154";
$destinatario = "ayoubechilah@gmail.com";
$remitente_email = "hello@demomailtrap.com";

// Solo acepta POST
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: ContactMe.html");
    exit;
}

// Obtener datos
$nombre = htmlspecialchars(trim($_POST["name"] ?? ""));
$email = filter_var(trim($_POST["email"] ?? ""), FILTER_SANITIZE_EMAIL);
$asunto = htmlspecialchars(trim($_POST["subject"] ?? ""));
$mensaje = htmlspecialchars(trim($_POST["message"] ?? ""));

// Validaciones
$errores = [];

if (empty($nombre)) {
    $errores[] = "El nombre es obligatorio";
}

if (empty($email)) {
    $errores[] = "El email es obligatorio";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errores[] = "El email no es válido";
}

if (empty($asunto)) {
    $errores[] = "El asunto es obligatorio";
}

if (empty($mensaje)) {
    $errores[] = "El mensaje es obligatorio";
}

// Si hay errores de validación, redirigir con los errores
if (!empty($errores)) {
    $errores_url = urlencode(implode("|", $errores));
    header("Location: validation_error.html?errors=" . $errores_url);
    exit;
}

// Preparar datos
$data = [
    "from" => ["email" => $remitente_email, "name" => "Formulario Web"],
    "to" => [["email" => $destinatario]],
    "subject" => "Contacto Web: " . $asunto,
    "html" => "<p><b>Nombre:</b> $nombre</p><p><b>Email:</b> $email</p><p><b>Asunto:</b> $asunto</p><p><b>Mensaje:</b> $mensaje</p>",
    "headers" => ["Reply-To" => $email]
];

// Enviar con Mailtrap API
$ch = curl_init("https://sandbox.api.mailtrap.io/api/send/" . $INBOX_ID);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => ["Authorization: Bearer $MAILTRAP_API_TOKEN", "Content-Type: application/json"]
]);
$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Redirigir según resultado
if ($http_code >= 200 && $http_code < 300) {
    header("Location: success.html");
} else {
    header("Location: error.html");
}
exit;
?>
