<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios - Pulpos</title>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background: linear-gradient(135deg, #001f3f 0%, #003566 30%, #0a9396 60%, #94d2bd 100%);
        color: white;
        padding: 40px;
    }

    h1 {
        text-align: center;
        color: #5dade2;
        text-shadow: 0 0 20px #5dade2;
        margin-bottom: 40px;
    }

    .comments-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .comment-card {
        background: rgba(0, 40, 80, 0.6);
        border: 1px solid #5dade2;
        border-radius: 15px;
        padding: 20px;
        backdrop-filter: blur(8px);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .comment-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(93, 173, 226, 0.6);
    }

    .author {
        color: #85c1e9;
        font-size: 1.2em;
        font-weight: bold;
        margin-bottom: 10px;
        border-bottom: 1px solid rgba(133, 193, 233, 0.4);
        padding-bottom: 5px;
    }

    .date {
        font-size: 0.8em;
        color: #b2ebf2;
        float: right;
    }

    .text {
        font-size: 1em;
        line-height: 1.5;
        color: #e0f7fa;
    }

    .nav-btn {
        display: block;
        width: 220px;
        margin: 40px auto;
        text-align: center;
        padding: 15px;
        background: linear-gradient(135deg, #5dade2 0%, #3498db 100%);
        color: white;
        text-decoration: none;
        font-weight: bold;
        border-radius: 12px;
        box-shadow: 0 0 20px rgba(52, 152, 219, 0.6);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .nav-btn:hover {
        transform: scale(1.08);
        box-shadow: 0 0 30px rgba(133, 193, 233, 0.9);
    }

    .server-msg {
        font-size: 0.8em; 
        color: #b2ebf2; 
        text-align: center; 
        margin-bottom: 20px;
    }

    a {
        color: #85c1e9;
    }

    a:hover {
        color: #e0f7fa;
        text-shadow: 0 0 10px #85c1e9;
    }
</style>

</head>
<body>

    <div class="server-msg">
    <?php
    
    $conexion = mysqli_connect("sql302.epizy","if0_40475188","8hTnifYQK4","if0_40475188_interactivo");
    if(!$conexion){
        echo "Error: No se pudo conectar a MySQL.";
        exit;
    }
    echo "Estado: Conexión establecida (Host: " . mysqli_get_host_info($conexion) . ")";
    ?>
    </div>

    <h1> Opiniones de la Comunidad</h1>

    <div class="comments-grid">
        <?php
        $sql = "SELECT * FROM Visita ORDER BY id DESC";
        $resultado = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            while($fila = mysqli_fetch_assoc($resultado)) {
                echo '<div class="comment-card">';
                echo '<div class="author">' . htmlspecialchars($fila["nombre"]) . ' <span class="date">' . $fila["fecha"] . '</span></div>';
                echo '<div class="text">"' . htmlspecialchars($fila["comentario"]) . '"</div>';
                echo '</div>';
            }
        } else {
            echo "<p style='text-align:center; grid-column: 1/-1;'>Aún no hay comentarios. ¡Sé el primero!</p>";
        }

        mysqli_close($conexion);
        ?>
    </div>

    <a href="formulario.php" class="nav-btn"> Escribir Comentario</a>
    <a href="index.html" style="display:block; text-align:center; color: #00ff00; margin-top: 10px;">← Volver al interactivo</a>

</body>
</html>