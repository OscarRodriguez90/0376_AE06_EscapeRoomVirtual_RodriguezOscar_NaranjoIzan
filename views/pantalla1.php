<?php
session_start();
if (!isset($_SESSION['pantalla1']) || $_SESSION['pantalla1'] !== "check") {
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

    <i class="fa-solid fa-cat"></i>
    <link rel="icon" href="../img/cat-solid.svg">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="../styles.css">
</head>
<body class="pantalla-1 d-flex justify-content-center align-items-center vh-100">

    <div id="form-container" class="container text-center p-4 rounded shadow-lg">
        <h1 class="mb-4">Segundo Desafío</h1>

        <form action="../proc/resolver.proc.php" method="POST">
            <!-- Pregunta 1: Operación matemática -->
            <div class="mb-3">
                <label for="math" class="form-label">Resuelve: 12 + 8 - 5 = ?</label>
                <input type="number" name="math" class="form-control text-center" required>
            </div>

            <!-- Pregunta 2: Ordenar letras -->
            <div class="mb-3">
                <label for="word" class="form-label">Ordena estas letras para formar una palabra: A, S, O, P</label>
                <input type="text" name="word" class="form-control text-center" placeholder="Escribe la palabra" required>
            </div>

            <!-- Pregunta 3: Menú desplegable -->
            <div class="mb-3">
                <label for="select" class="form-label">¿Qué objeto da luz en la noche?</label>
                <select name="select" class="form-select text-center" required>
                    <option value="" selected disabled>Selecciona una opción</option>
                    <option value="sol">Sol</option>
                    <option value="luna">Luna</option>
                    <option value="estrella">Estrella</option>
                </select>
            </div>

            <button type="submit" class="btn btn-warning fw-bold px-4 py-2" name="pantalla1">Enviar</button>
        </form>

        <?php if (isset($_GET['pista2'])): ?>
            <p class="hint text-success mt-3"><?php echo "Incorrecto. <br> " . htmlspecialchars($_GET['pista2']); ?></p>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
