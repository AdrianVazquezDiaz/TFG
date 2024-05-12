<?php
// Verificar si se han enviado datos por el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    // Conectar a la base de datos
    $servername = "localhost";
    $username = "usuario";
    $password = "contraseña";
    $dbname = "nombre_base_de_datos";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Preparar la consulta SQL para insertar los datos
    $sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";

    // Ejecutar la consulta y verificar si se realizó con éxito
    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar: " . $conn->error;
    }

    // Cerrar la conexión con la base de datos
    $conn->close();
}
?>
