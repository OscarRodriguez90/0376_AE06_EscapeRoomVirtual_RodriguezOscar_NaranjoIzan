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
    <title>Envio de datos</title>
</head>
<body>
    <h1>Cuarto acertijo</h1>
    
    <form action="../proc/resolver.proc.php" method="POST">

        <label for="silencio">Si me nombras, desaparezco. ¿Qué soy?3</label>
        <input type="text"  name="silencio">
        <input type="submit" name="pantalla3">
    </form>

    <?php
        if(isset($_GET['pista2'])) {
            
            echo "<p> Incorrecto. <br> Pista: " . $_GET['pista2'] . "</p>"; 
        }
   ?>
     
    
    
</body>

</html>