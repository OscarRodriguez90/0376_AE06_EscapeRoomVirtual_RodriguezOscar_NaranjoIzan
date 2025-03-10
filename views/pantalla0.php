<?php
session_start();
    if (!($_SESSION["pantalla0"] == "check")){
    header("Location: ../index.php?error=pillo");
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Room - Acertijo</title>
    <link rel="stylesheet" href="../styles.css"> <!-- Ruta corregida -->
</head>
<body>

    <div id="form-container">
        <h1>Primer Acertijo</h1>
        <form action="../proc/resolver.proc.php" method="POST">
            <label for="tiempo">Siempre avanza, nunca retrocede, y cuando lo pierdes, no lo puedes recuperar. ¿Qué es?</label>
            <input type="text" name="tiempo">
            <input type="submit" value="Enviar" name="pantalla0">
        </form>
<?php
    if (isset($_GET['pista1'])) {
        echo "<p class='hint'><br>Incorrecto. Pista: " . htmlspecialchars($_GET['pista1']) . "</p>";
    }
    if (isset($_GET['error'])) {
        echo "<p class='error'>Te has pasado de listo, calisto</p>";
    }
    ?>
    </div>

    

</body>
</html>
