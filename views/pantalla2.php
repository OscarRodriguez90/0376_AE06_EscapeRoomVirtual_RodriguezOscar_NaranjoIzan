<?php
session_start();
    if (!($_SESSION["pantalla1"] == "check")){
    header("Location: ../index.php?error=pillo");
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Room - Tercer Acertijo</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>

    <div id="form-container">
        <h1>Tercer Acertijo</h1>

        <form action="../proc/resolver.proc.php" method="POST">
            <label for="silencio">Si me nombras, desaparezco. ¿Qué soy?</label>
            <input type="text" name="silencio">
            <input type="submit" name="pantalla2" value="Enviar">
        </form>

        <?php
            if(isset($_GET['pista2'])) {
                echo "<p class='pista'>Incorrecto. <br> Pista: " . $_GET['pista2'] . "</p>"; 
            }
        ?>
    </div>

</body>
</html>
