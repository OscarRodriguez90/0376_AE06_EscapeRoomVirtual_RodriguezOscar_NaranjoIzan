<?php
session_start();
if(!($_SESSION["pantalla2"] == "check")){
    header("Location: ../index.php?error=pillo");
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Felicidades</h1>
    <a href="../proc/replay.proc.php">Volver a empezar</a>



</body>
</html> 