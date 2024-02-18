<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
<!-- Agrega estos enlaces en el encabezado de tu archivo HTML -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <title>Lista de Animes</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="main.js"></script>
    <style>
        /* Añade estilos adicionales aquí si es necesario */
        .favorito-indicador {
            background-color: yellow;
            color: black;
            padding: 2px 5px;
            border-radius: 3px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <button id="scrollToTopBtn" onclick="scrollToTop()" title="Volver arriba">↑</button>
    <?php
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'anime';
        
        $conexion = mysqli_connect($host, $user, $password, $database);
        
        if (!$conexion) {
            die('No se pudo conectar a la base de datos: ' . mysqli_connect_error());
        }
        
        echo '<center><a href="forminsertaanime.php"><button>Insertar Anime</button></a></center><br>';
        $query = "SELECT id, nombre, descripcion, fecha, visto, foto, observaciones, terminado, favorito FROM animes";
        $result = mysqli_query($conexion, $query);
        $num_animes = mysqli_num_rows($result);
        echo '<center><p>Total de animes: ' . $num_animes . '</p></center>';
        echo '<center> <input type="text" id="buscar" placeholder="Buscar por nombre del anime"></center>';
        echo '<div id="resultadoBusqueda"></div>';

        echo '<table>'; 
        echo '<tr>';
        echo '<th>Foto</th>';
        echo '<th>Nombre</th>';
        echo '<th>Descripción</th>';
        echo '<th>Fecha</th>';
        echo '<th>Visto</th>';
        echo '<th>Observaciones</th>';
        echo '<th>Terminado</th>';
        echo '<th>Favorito</th>'; // Nueva columna para indicador de favorito
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
            echo '<td>' . ($row['favorito'] ? '<center><span style="font-size: 30px;">🌟</span></center>' : '<center><span style="font-size: 25px;">❌</span></center>') . '</td>';
            echo '<td>
                    <a href="formmodificaanime.php?id=' . $row['id'] . '"><button>Modificar</button></a>
                  </td>';
            echo '<td><a href="eliminaranime.php?id=' . $row['id'] . '"><button>Eliminar</button></a></td>';
            echo '</tr>';
        }

        echo '</table>';
        echo '<center><h1>¡Fin de la lista!</h1></center>';
        mysqli_close($conexion);
    ?>
</body>
</html>
