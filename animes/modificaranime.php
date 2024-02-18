<?php
// modificaranime.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'anime';

    $conexion = mysqli_connect($host, $user, $password, $database);

    if (!$conexion) {
        die('No se pudo conectar a la base de datos: ' . mysqli_connect_error());
    }

    $anime_id = isset($_POST['id']) ? mysqli_real_escape_string($conexion, $_POST['id']) : die('ID de anime no proporcionado');
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion, $_POST['nombre']) : '';
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($conexion, $_POST['descripcion']) : '';
    $fecha = isset($_POST['fecha']) ? mysqli_real_escape_string($conexion, $_POST['fecha']) : '';
    $visto = isset($_POST['visto']) ? 1 : 0;
    $foto = isset($_POST['foto']) ? mysqli_real_escape_string($conexion, $_POST['foto']) : '';
    $observaciones = isset($_POST['observaciones']) ? mysqli_real_escape_string($conexion, $_POST['observaciones']) : '';
    $terminado = isset($_POST['terminado']) ? 1 : 0;
    $favorito = isset($_POST['favorito']) ? 1 : 0; // Nueva línea para obtener el estado de favorito

    $query = "UPDATE animes SET
              nombre = '$nombre',
              descripcion = '$descripcion',
              fecha = '$fecha',
              visto = '$visto',
              foto = '$foto',
              observaciones = '$observaciones',
              terminado = '$terminado',
              favorito = '$favorito'  -- Nueva línea para actualizar el estado de favorito
              WHERE id = '$anime_id'";

    $result = mysqli_query($conexion, $query);

    if (!$result) {
        die('Error en la consulta: ' . mysqli_error($conexion));
    }

    mysqli_close($conexion);

    // Redirigir a la página principal después de la modificación
    header('Location: index.php');
    exit();
} else {
    // Manejar la solicitud incorrecta (no POST)
    echo 'Acceso no permitido';
}
?>
