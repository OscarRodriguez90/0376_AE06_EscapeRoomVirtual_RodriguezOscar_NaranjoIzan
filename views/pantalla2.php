<?php
session_start();
if (!isset($_SESSION['pantalla1']) || $_SESSION['pantalla1'] !== "check") {
    header("Location: ../index.php?error=acceso_denegado");
    exit();
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Room - Segundo Acertijo</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body class="pantalla-2">

    <div id="form-container">
        <h1>Tercer Acertijo</h1>

        <form action="../proc/resolver.proc.php" method="POST">
            <!-- Primer input: Nuevo acertijo complicado -->
            <label for="agujero">Cuanto más me quitas, más grande me vuelvo. ¿Qué soy?</label>
            <input type="text" name="agujero" placeholder="Ingresa tu respuesta" required>
            
            <br>
            
            <!-- Segundo input: Un campo numérico -->
            <label for="numero">Cuántas letras tiene la palabra 'relámpago'?</label>
            <input type="number" name="numero" placeholder="Ingresa el número de letras" required>
            
            <br>

            <!-- Tercer input: Un campo numérico para un cálculo matemático -->
            <label for="calculo">Si tienes 10 manzanas y le das 3 a un amigo, ¿cuántas te quedan?</label>
            <input type="number" name="calculo" placeholder="Ingresa tu respuesta" required>
            
            <br><br>

            <input type="submit" name="pantalla2" value="Enviar">
        </form>

        <?php
            if(isset($_GET['pista2'])) {
                echo "<p class='hint'>Incorrecto. <br> " . $_GET['pista2'] . "</p>"; 
            }
        ?>
    </div>

</body>
</html>


