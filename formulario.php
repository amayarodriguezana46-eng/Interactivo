<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dejar Comentario - Pulpos</title>
    <style>
body {
    font-family: 'Arial', sans-serif;
    background: linear-gradient(135deg, #001f3f 0%, #005f73 40%, #0a9396 70%, #94d2bd 100%);
    color: white;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

.form-container {
    background: rgba(0, 0, 50, 0.45);
    padding: 40px;
    border-radius: 20px;
    backdrop-filter: blur(12px);
    border: 2px solid #5dade2;
    width: 100%;
    max-width: 500px;
    box-shadow: 0 0 35px rgba(93, 173, 226, 0.6);
}

h2 {
    text-align: center;
    color: #5dade2;
    margin-bottom: 30px;
    text-shadow: 0 0 10px #5dade2;
}

label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
    color: #85c1e9;
}

        input[type="text"], textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 10px;
            border: 1px solid #333;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            font-size: 16px;
            box-sizing: border-box;
        }
        input:focus, textarea:focus {
            outline: none;
            border-color: #00ff00;
            box-shadow: 0 0 10px rgba(0, 255, 0, 0.3);
        }
button {
    width: 100%;
    padding: 15px;
    background: linear-gradient(135deg, #5dade2 0%, #3498db 100%);
    color: white;
    border: none;
    border-radius: 10px;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    transition: transform 0.2s;
}

button:hover {
    transform: scale(1.05);
    box-shadow: 0 0 20px rgba(93, 173, 226, 0.8);
}

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: white;
            text-decoration: none;
        }
        .back-link:hover {
            color: #00ff00;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Tu Opinión</h2>
        <form action="procesar.php" method="POST">
            <label for="nombre">Nombre o Nickname:</label>
            <input type="text" id="nombre" name="nombre" required placeholder="Ej: Conocedor">

            <label for="comentario">Comentario:</label>
            <textarea id="comentario" name="comentario" rows="5" required placeholder="¿Qué te pareció el interactivo?"></textarea>

            <button type="submit">Enviar Comentario</button>
        </form>
        <a href="index.html" class="back-link">← Volver al interectavo</a>
    </div>
</body>
</html>