<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "espacio_interior";

// Crea una conexión a la base de datos
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica si la conexión fue exitosa
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Recupera los datos del formulario
$titulo = $_POST['introducir_titulo'];
$comentario = $_POST['introducir_comentario'];
$foto_blog = $_POST['introducir_foto_blog'];
$fecha = date("d/m/y");

// Ejecuta una consulta SQL para insertar los datos en la base de datos
$sql = "INSERT INTO guardar_blog (titulo, mensaje, imagen, fecha) VALUES ('$titulo', '$comentario', '$foto_blog', '$fecha')";

if (mysqli_query($conn, $sql)) {
    echo "Datos guardados correctamente";
} else {
    echo "Error al guardar los datos: " . mysqli_error($conn);
}

// Cierra la conexión a la base de datos
mysqli_close($conn);
?>


