<?php
session_start();
if (!($_SESSION["pantalla0"] == "check")) {
    header("Location: ../index.php?error=pillo");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Room - Primer Acertijo</title>
    <link rel="stylesheet" href="../styles.css"> <!-- Ruta corregida -->
</head>
<body class="pantalla-0">

    <div id="form-container">
        <h1>Primer Acertijo</h1>
        <form action="../proc/resolver.proc.php" method="POST">
            <!-- Primer input: Respuesta al acertijo -->
            <label for="tiempo">Siempre avanza, nunca retrocede, y cuando lo pierdes, no lo puedes recuperar. ¿Qué es?</label>
            <input type="text" name="tiempo" placeholder="Ingresa tu respuesta" required>
            
            <br><br>
            
            <!-- Segundo input: Un campo numérico -->
            <label for="número">¿Cuántas horas tiene un día?</label>
            <input type="number" name="número" placeholder="Ingresa el número de horas" required>
            
            <br>

            <!-- Pregunta interactiva con radio buttons dispuestos horizontalmente -->
            <label>¿Qué es más pesado?</label><br>
            <div class="radio-container">
                <input type="radio" name="pregunta_interactiva" value="plomo" id="plomo">
                <label for="plomo">1 kilogramo de plomo</label>
                
                <input type="radio" name="pregunta_interactiva" value="platanos" id="platanos">
                <label for="platanos">1 kilogramo de plátanos</label>
                
                <input type="radio" name="pregunta_interactiva" value="igual" id="igual">
                <label for="igual">Son igual de pesados</label>
            </div>

            <br>

            <input type="submit" value="Enviar" name="pantalla0">
        </form>
        
        <?php
        if (isset($_GET['pista1'])) {
            echo "<p class='hint'><br>Incorrecto. " . htmlspecialchars($_GET['pista1']) . "</p>";
        }
        if (isset($_GET['error'])) {
            echo "<p class='error'>Te has pasado de listo, calisto</p>";
        }
        ?>
    </div>

</body>
</html>

