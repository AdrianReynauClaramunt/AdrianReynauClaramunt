<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Formulario para Insertar Anime</title>
</head>
<body>
    <center><a href="index.php"><button>Volver a la Página Principal</button></a></center>
    <center><h2>Insertar Nuevo Anime</h2></center>

    <form action="insertaanime.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" required></textarea><br>

        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" required><br>

        <label for="visto">Visto:</label>
        <input type="checkbox" name="visto"><br>

        <label for="foto">URL de la Foto:</label>
        <input type="text" name="foto"><br>

        <label for="observaciones">Observaciones:</label>
        <textarea name="observaciones"></textarea><br>

        <label for="Terminado">Terminado:</label>
        <input type="checkbox" name="terminado"><br>

        <label for="favorito">Favorito:</label>
        <input type="checkbox" name="favorito"><br>

        <input type="submit" value="Insertar Anime">
    </form>
</body>
</html>
