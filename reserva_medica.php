<?php

// Configuración de la conexión a la base de datos
$host='localhost'; // Cambia esto si tu servidor de base de datos no está en localhost
$usuario='root'; // Cambia esto por el usuario de tu base de datos
$contrasena=''; // Cambia esto por la contraseña de tu base de datos
$base_datos='reservacion_booksmart'; // Cambia esto por el nombre de tu base de datos

// Conexión a la base de datos
$conexion=new mysqli($host, $usuario, $contrasena, $base_datos);

// Recibir datos del formulario
$nombre=$_POST['nombre'];
$apellido_paterno=$_POST['apellido_paterno'];
$apellido_materno=$_POST['apellido_materno'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$cantidad=$_POST['cantidad'];
$dia=$_POST['dia'];
$centro_salud=$_POST['centro_salud'];

if(isset($_POST['reservar'])){
    $insertar="INSERT INTO reserva_medica (nombre, apellido_paterno, apellido_materno, telefono, correo, cantidad, dia, centro_salud) VALUES ('$nombre','$apellido_paterno','$apellido_materno','$telefono','$correo','$cantidad','$dia','$centro_salud')";
    $sql=mysqli_query($conexion, $insertar);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Procesar los datos del formulario aquí (validaciones, almacenamiento en BD, etc.)
    $nombre = $_POST['nombre'];
    $apellido_paterno = $_POST['apellido_paterno'];
    $apellido_materno = $_POST['apellido_materno'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $cantidad = $_POST['cantidad'];
    $dia = $_POST['dia'];
    $centro_salud = $_POST['centro_salud'];

    // Redireccionar a la página de inicio con el mensaje de éxito
    header("Location: reservacion_medica.html?success=true");
    exit();
}

?>
