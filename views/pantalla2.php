<?php
session_start();
if (!($_SESSION["pantalla2"] == "check")){
    header("Location: ../index.php?error=pillo");
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
        <h1>Segundo Acertijo</h1>

        <form action="../proc/resolver.proc.php" method="POST">
            <!-- Primer input: Nuevo acertijo complicado -->
            <label for="agujero">Cuanto más me quitas, más grande me vuelvo. ¿Qué soy?</label>
            <input type="text" name="agujero" placeholder="Ingresa tu respuesta" required>
            
            <br><br>
            
            <!-- Segundo input: Un campo numérico -->
            <label for="numero">Cuántas letras tiene la palabra 'relámpago'?</label>
            <input type="number" name="numero" placeholder="Ingresa el número de letras" required>
            
            <br><br>

            <!-- Tercer input: Un campo numérico para un cálculo matemático -->
            <label for="calculo">Si tienes 10 manzanas y le das 3 a un amigo, ¿cuántas te quedan?</label>
            <input type="number" name="calculo" placeholder="Ingresa tu respuesta" required>
            
            <br><br>

            <!-- Cuarto input: Nueva pregunta difícil de ortografía -->
            <label for="pregunta_ortografia">¿Cómo se escribe correctamente la palabra que describe el fenómeno en el que una persona pierde la capacidad de hablar debido a un daño cerebral?</label>
            <input type="text" name="pregunta_ortografia" placeholder="Ingresa tu respuesta" required>
            
            <br><br>

            <input type="submit" name="pantalla2" value="Enviar">
        </form>

        <?php
            if(isset($_GET['pista2'])) {
                echo "<p class='hint'>Incorrecto. <br> Pista: " . $_GET['pista2'] . "</p>"; 
            }
        ?>
    </div>

</body>
</html>


