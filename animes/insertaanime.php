<a href="index.php"><button>Volver a la Página Principal</button></a>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'anime';

    $conexion = mysqli_connect($host, $user, $password, $database);

    if (!$conexion) {
        die('No se pudo conectar a la base de datos: ' . mysqli_connect_error());
    }

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $fecha = $_POST['fecha'];
    $visto = isset($_POST['visto']) ? 1 : 0;
    $foto = $_POST['foto'];
    $observaciones = $_POST['observaciones'];
    $terminado = isset($_POST['terminado']) ? 1 : 0;
    $favorito = isset($_POST['favorito']) ? 1 : 0; // Nueva línea para obtener el estado de favorito


    $query = "INSERT INTO animes (nombre, descripcion, fecha, visto, foto, observaciones, terminado, favorito) 
              VALUES ('$nombre', '$descripcion', '$fecha', $visto, '$foto', '$observaciones', '$terminado', '$favorito')";

    if (mysqli_query($conexion, $query)) {
        echo "Anime insertado exitosamente.";
    } else {
        echo "Error al insertar el anime: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}
?>
