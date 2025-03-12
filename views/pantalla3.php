<?php
session_start();
if (!isset($_SESSION['pantalla2']) || $_SESSION['pantalla2'] !== "check") {
    header("Location: ../index.php?error=acceso_denegado");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Room - Cuarto Acertijo</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body class="pantalla-3">

    <div id="form-container">
        <h1>Cuarto Acertijo</h1>

        <form action="../proc/resolver.proc.php" method="POST">
            <!-- Primer input: Riddle numérico complicado -->
            <label for="riddle_numero">¿Cuántos segundos hay en 1 hora y 15 minutos?</label>
            <input type="number" name="riddle_numero" placeholder="Ingresa tu respuesta en segundos" required>
            <br><br>
            
            <!-- Segundo input: Palabra reversa -->
            <label for="palabra_reversa">¿Qué palabra, al leerla al revés, se convierte en la misma palabra?</label>
            <input type="text" name="palabra_reversa" placeholder="Ingresa tu respuesta" required>
            <br><br>
            
            <!-- Tercer input: Problema lógico -->
            <label for="problema_logico">Un hombre llega a un pueblo el 1 de enero y se va el 31 de diciembre. ¿Cuántos días pasa en ese pueblo?</label>
            <input type="number" name="problema_logico" placeholder="Ingresa tu respuesta" required>
            <br><br>

            <input type="submit" name="pantalla3" value="Enviar">
        </form>

        <?php
            if (isset($_GET['pista3'])) {
                echo "<p class='hint'>Incorrecto. <br> " . $_GET['pista3'] . "</p>"; 
            }
        ?>
    </div>

</body>
</html>
