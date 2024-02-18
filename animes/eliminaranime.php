<?php
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $anime_id = $_GET['id'];

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'anime';

    $conexion = mysqli_connect($host, $user, $password, $database);

    if (!$conexion) {
        die('No se pudo conectar a la base de datos: ' . mysqli_connect_error());
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Si se ha enviado el formulario de confirmación
        $confirmacion = isset($_POST['confirmacion']) ? $_POST['confirmacion'] : '';

        if ($confirmacion === 'si') {
            // Confirmación de eliminar, proceder con la eliminación
            $eliminar = "DELETE FROM animes WHERE id = $anime_id";
            $resultado_eliminar = mysqli_query($conexion, $eliminar);

            if ($resultado_eliminar) {
                echo '<center><h2>¡Anime eliminado con éxito!</h2><center>';
                echo '<br>';
                echo '<center><a href="index.php"><button>Volver a la Página Principal</button></a><center>';
            } else {
                echo '<center><h2>Error al intentar eliminar el anime</h2><center>';
            }
        } else {
            // El usuario ha cancelado la eliminación, redirigir a la página principal
            header("Location: index.php");
            exit();
        }
    } else {
        // Mostrar formulario de confirmación
        echo '<center><h2>¿Seguro que desea eliminar este anime?</h2><center>';
        echo '<form method="post">';
        echo '<input type="hidden" name="confirmacion" value="si">';
        echo '<button type="submit">Sí, eliminar</button>';
        echo '</form>';
        echo '<center><a href="index.php"><button>No, volver a la Página Principal</button></a><center>';
    }

    mysqli_close($conexion);
} else {
    echo '<center><h2>ID de anime no válido</h2><center>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Eliminar Anime</title>
</head>
<body>
</body>
</html>
