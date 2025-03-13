<?php
session_start();

// Verifica si el jugador ha pasado la pantalla 1
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
    <title>Escape Room - Tercer Acertijo</title>

    <i class="fa-solid fa-cat"></i>
    <link rel="icon" href="../img/cat-solid.svg">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="../styles.css">
</head>
<body class="pantalla-2 d-flex justify-content-center align-items-center vh-100">

    <div id="form-container" class="container text-center p-4 rounded shadow-lg">
        <h1 class="mb-4">Tercer Acertijo</h1>

        <form action="../proc/resolver.proc.php" method="POST">
            <!-- Primer acertijo -->
            <div class="mb-3">
                <label for="agujero" class="form-label">Cuanto más me quitas, más grande me vuelvo. ¿Qué soy?</label>
                <input type="text" name="agujero" class="form-control text-center" placeholder="Ingresa tu respuesta" required>
            </div>
            
            <!-- Segundo acertijo: número de letras -->
            <div class="mb-3">
                <label for="numero" class="form-label">¿Cuántas letras tiene la palabra 'relámpago'?</label>
                <input type="number" name="numero" class="form-control text-center" placeholder="Ingresa el número de letras" required>
            </div>

            <!-- Tercer acertijo: cálculo matemático -->
            <div class="mb-3">
                <label for="calculo" class="form-label">Si tienes 10 manzanas y le das 3 a un amigo, ¿cuántas te quedan?</label>
                <input type="number" name="calculo" class="form-control text-center" placeholder="Ingresa tu respuesta" required>
            </div>

            <button type="submit" class="btn btn-warning fw-bold px-4 py-2" name="pantalla2">Enviar</button>
        </form>

        <?php if (isset($_GET['pista2'])): ?>
            <p class="hint text-danger mt-3"><?php echo "Incorrecto. <br> " . htmlspecialchars($_GET['pista2']); ?></p>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

