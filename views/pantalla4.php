<?php
session_start();
if (!isset($_SESSION['pantalla4']) || $_SESSION['pantalla4'] !== "check") {
    header("Location: ../index.php?error=acceso_denegado");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Escape Exitoso!</title>
    <link rel="icon" href="../img">

    
    <i class="fa-solid fa-cat"></i>
    <link rel="icon" href="../img/cat-solid.svg">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="../styles.css">
   
</head>
<body class="pantalla-4 d-flex justify-content-center align-items-center vh-100 text-center">

    <div class="">
        <h1>¡Felicidades, has logrado escapar!</h1>
        <a href="../proc/replay.proc.php">Volver a empezar</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

