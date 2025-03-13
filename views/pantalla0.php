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

    <i class="fa-solid fa-cat"></i>
    <link rel="icon" href="../img/cat-solid.svg">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="../styles.css">
</head>
<body class="pantalla-0 d-flex justify-content-center align-items-center vh-100">

    <div id="form-container" class="container text-center p-4 rounded shadow-lg">
        <h1 class="mb-4">Primer Acertijo</h1>

        <form action="../proc/resolver.proc.php" method="POST">
            <!-- Primer input: Respuesta al acertijo -->
            <div class="mb-3">
                <label for="tiempo" class="form-label">Siempre avanza, nunca retrocede, y cuando lo pierdes, no lo puedes recuperar. ¿Qué es?</label>
                <input type="text" name="tiempo" class="form-control" placeholder="Ingresa tu respuesta" required>
            </div>

            <!-- Segundo input: Un campo numérico -->
            <div class="mb-3">
                <label for="número" class="form-label">¿Cuántas horas tiene un día?</label>
                <input type="number" name="número" class="form-control" placeholder="Ingresa el número de horas" required>
            </div>

            <!-- Pregunta interactiva con radio buttons -->
            <fieldset class="mb-3">
                <legend class="form-label">¿Qué es más pesado?</legend>
                <div class="d-flex justify-content-center gap-3">
                    <div class="form-check">
                        <input type="radio" name="pregunta_interactiva" value="plomo" id="plomo" class="form-check-input">
                        <label for="plomo" class="form-check-label">1 kilogramo de plomo</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="pregunta_interactiva" value="platanos" id="platanos" class="form-check-input">
                        <label for="platanos" class="form-check-label">1 kilogramo de plátanos</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="pregunta_interactiva" value="igual" id="igual" class="form-check-input">
                        <label for="igual" class="form-check-label">Son igual de pesados</label>
                    </div>
                </div>
            </fieldset>

            <button type="submit" class="btn btn-warning fw-bold px-4 py-2" name="pantalla0">Enviar</button>
        </form>

        <?php if (isset($_GET['pista1'])): ?>
            <p class="hint text-success mt-3"><?php echo "<br>Incorrecto. " . htmlspecialchars($_GET['pista1']); ?></p>
        <?php endif; ?>

        <?php if (isset($_GET['error'])): ?>
            <p class="error text-danger mt-3">Te has pasado de listo, calisto</p>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
