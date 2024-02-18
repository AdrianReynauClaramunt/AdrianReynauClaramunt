<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'anime';

$conexion = mysqli_connect($host, $user, $password, $database);

if (!$conexion) {
    die('No se pudo conectar a la base de datos: ' . mysqli_connect_error());
}

if (isset($_POST['nombreAnime'])) {
    $nombreAnime = mysqli_real_escape_string($conexion, $_POST['nombreAnime']);
    $query = "SELECT id, nombre, descripcion, fecha, visto, foto, observaciones, terminado FROM animes WHERE nombre LIKE '%$nombreAnime%'";
    $result = mysqli_query($conexion, $query);

    echo '<table>';
    echo '<tr>';
    echo '<th>Foto</th>';
    echo '<th>Nombre</th>';
    echo '<th>Descripción</th>';
    echo '<th>Fecha</th>';
    echo '<th>Visto</th>';
    echo '<th>Observaciones</th>';
    echo '<th>Terminado</th>';
    echo '<th colspan="2"><center>Acciones</center></th>';
    echo '</tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td><img src="' . $row['foto'] . '" alt="Foto"></td>';
        echo '<td>' . $row['nombre'] . '</td>';
        echo '<td>' . $row['descripcion'] . '</td>';
        echo '<td>' . $row['fecha'] . '</td>';
        echo '<td>' . ($row['visto'] ? 'Sí' : 'No') . '</td>';
        echo '<td>' . $row['observaciones'] . '</td>';
        echo '<td>' . ($row['terminado'] ? 'Sí' : 'No') . '</td>';
        echo '<td>
                <a href="formmodificaanime.php?id=' . $row['id'] . '"><button>Modificar</button></a>
              </td>';
        echo '<td><a href="eliminaranime.php?id=' . $row['id'] . '"><button>Eliminar</button></a></td>';
        echo '</tr>';
    }

    echo '</table>';
}

mysqli_close($conexion);
?>
