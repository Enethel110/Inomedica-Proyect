<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Aquí iría la lógica para enviar el correo de restablecimiento de contraseña

    // Después de enviar el correo, redirigir a la página de inicio de sesión
    header("Location: ../login.php?reset=success"); // Puedes agregar un parámetro de éxito si deseas
    exit(); // Asegúrate de llamar a exit después de header
}
?>
