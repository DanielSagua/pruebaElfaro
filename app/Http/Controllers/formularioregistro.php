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

$conn = new mysqli($servername, $username, $password, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe y limpia los datos del formulario
    $username = clean_input($_POST["username"]);
    $email = clean_input($_POST["email"]);
    $password = clean_input($_POST["password"]);

    // Hash de la contraseña (puedes utilizar una función más segura como password_hash())
    $hashed_password = md5($password);

    // Prepara la consulta SQL para insertar los datos en la tabla de usuarios
    $sql = "INSERT INTO usuarios (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "¡Registro exitoso!";
    } else {
        echo "Error al registrar usuario: " . $conn->error;
    }
}

// Función para limpiar los datos de entrada
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Cierra la conexión a la base de datos
$conn->close();
?>
