<?php
session_start();
if (!($_SESSION["pantalla1"] == "check")) {
    header("Location: ../index.php?error=pillo");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Room - Segundo Desafío</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body class="pantalla-1">

    <div id="form-container">
        <h1>Segundo Desafío</h1>

        <form action="../proc/resolver.proc.php" method="POST">
            
            <!-- Pregunta 1: Operación matemática -->
            <label for="math">Resuelve: 12 + 8 - 5 = ?</label>
            <input type="number" name="math" required>

            <!-- Pregunta 2: Ordenar letras -->
            <label for="word">Ordena estas letras para formar una palabra: A, S, O, P</label>
            <input type="text" name="word" placeholder="Escribe la palabra" required>

            <!-- Pregunta 3: Menú desplegable -->
            <label for="select">¿Qué objeto da luz en la noche?</label>
            <select name="select" required>
                <option value="">Selecciona una opción</option>
                <option value="sol">Sol</option>
                <option value="luna">Luna</option>
                <option value="estrella">Estrella</option>
            </select>

            <input type="submit" name="pantalla1" value="Enviar">
        </form>

        <?php
        if (isset($_GET['pista2'])) {
            echo "<p class='hint'>Incorrecto. <br> " . $_GET['pista2'] . "</p>"; 
        }
        ?>
    </div>

</body>
</html>

