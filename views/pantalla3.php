<?php
session_start();

// Verifica si el jugador ha pasado la pantalla 2
if (!isset($_SESSION['pantalla3']) || $_SESSION['pantalla3'] !== "check") {
    session_destroy();
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

    <i class="fa-solid fa-cat"></i>
    <link rel="icon" href="../img/cat-solid.svg">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="../styles.css">
</head>
<body class="pantalla-3 d-flex justify-content-center align-items-center vh-100">

    <div id="form-container" class="container text-center p-4 rounded shadow-lg">
        <h1 class="mb-4">Cuarto Acertijo</h1>

        <form action="../proc/resolver.proc.php" method="POST">
            <div class="mb-3">
                <label for="riddle_numero" class="form-label">¿Cuántos segundos hay en 1 hora y 15 minutos?</label>
                <input type="number" name="riddle_numero" class="form-control text-center" placeholder="Ingresa tu respuesta en segundos" required>
            </div>

            <div class="mb-3">
                <label for="palabra_reversa" class="form-label">¿Qué palabra, al leerla al revés, se convierte en la misma palabra?</label>
                <input type="text" name="palabra_reversa" class="form-control text-center" placeholder="Ingresa tu respuesta" required>
            </div>

            <div class="mb-3">
                <label for="problema_logico" class="form-label">Un hombre llega a un pueblo el 1 de enero y se va el 31 de diciembre. ¿Cuántos días pasa en ese pueblo?</label>
                <input type="number" name="problema_logico" class="form-control text-center" placeholder="Ingresa tu respuesta" required>
            </div>

            <button type="submit" class="btn btn-warning fw-bold px-4 py-2" name="pantalla3">Enviar</button>
        </form>

        <?php if (isset($_GET['pista3'])): ?>
            <p class="hint text-danger mt-3"><?php echo "Incorrecto. <br> " . htmlspecialchars($_GET['pista3']); ?></p>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
