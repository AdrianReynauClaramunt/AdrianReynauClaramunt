<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Modificar Anime</title>
</head>
<body>
    <center><a href="index.php"><button>Volver a la Página Principal</button></a></center>
    <?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'anime';

    $conexion = mysqli_connect($host, $user, $password, $database);

    if (!$conexion) {
        die('No se pudo conectar a la base de datos: ' . mysqli_connect_error());
    }

    // Obtener el ID del anime que se va a modificar
    $anime_id = isset($_GET['id']) ? mysqli_real_escape_string($conexion, $_GET['id']) : die('ID de anime no proporcionado');

    // Consulta para obtener la información del anime seleccionado
    $query = "SELECT * FROM animes WHERE id = $anime_id";
    $result = mysqli_query($conexion, $query);
    $anime = mysqli_fetch_assoc($result);

    if (!$anime) {
        die('Anime no encontrado');
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
    ?>

    <h2>Modificar Anime</h2>

    <form action="modificaranime.php" method="post">
        <input type="hidden" name="id" value="<?php echo $anime['id']; ?>">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $anime['nombre']; ?>" required><br>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" required><?php echo $anime['descripcion']; ?></textarea><br>

        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" value="<?php echo $anime['fecha']; ?>" required><br>

        <label for="visto">Visto:</label>
        <input type="checkbox" name="visto" <?php echo $anime['visto'] ? 'checked' : ''; ?>><br>

        <label for="foto">URL de la Foto:</label>
        <input type="text" name="foto" value="<?php echo $anime['foto']; ?>"><br>

        <label for="observaciones">Observaciones:</label>
        <textarea name="observaciones"><?php echo $anime['observaciones']; ?></textarea><br>

        <label for="terminado">Terminado:</label>
        <input type="checkbox" name="terminado" <?php echo $anime['terminado'] ? 'checked' : ''; ?>><br>

        <label for="favorito">Favorito:</label>
        <input type="checkbox" name="favorito" <?php echo $anime['favorito'] ? 'checked' : ''; ?>><br>

        <input type="submit" value="Modificar Anime">
    </form>
</body>
</html>
