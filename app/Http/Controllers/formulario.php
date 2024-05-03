<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

// Conexión a la base de datos (reemplaza los valores según tu configuración)
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$database = "tu_base_de_datos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar si se ha enviado el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir y limpiar los datos del formulario
    $username = clean_input($_POST["username"]);
    $email = clean_input($_POST["email"]);
    $password = clean_input($_POST["password"]);

    // Hash de la contraseña (se puede utilizar una función más segura como password_hash())
    $hashed_password = md5($password);

    // Consulta SQL para verificar si el correo electrónico ya está registrado
    $check_email_query = "SELECT * FROM usuarios WHERE email='$email'";
    $check_email_result = $conn->query($check_email_query);

    if ($check_email_result->num_rows > 0) {
        echo "El correo electrónico ya está registrado.";
    } else {
        // Consulta SQL para insertar los datos del nuevo usuario
        $insert_user_query = "INSERT INTO usuarios (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

        if ($conn->query($insert_user_query) === TRUE) {
            echo "Registro exitoso.";
        } else {
            echo "Error al registrar usuario: " . $conn->error;
        }
    }
}

// Función para limpiar los datos de entrada
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Cerrar conexión a la base de datos
$conn->close();
?>

