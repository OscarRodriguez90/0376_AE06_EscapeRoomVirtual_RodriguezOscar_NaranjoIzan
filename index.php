<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de datos</title>
</head>
<body>
    <h1>Primer acertijo</h1>
    
    <form action="./proc/resolver.proc.php" method="POST">

        <label for="tiempo">Siempre avanza, nunca retrocede, y cuando lo pierdes, no lo puedes recuperar. ¿Qué es?"</label>
        <input type="text"  name="tiempo">
        <input type="submit" name="index">
    </form>

    <?php
        if(isset($_GET['pista1'])) {
            
            echo "<p>Incorrecto. Pista: " . $_GET['pista1'] . "</p>"; 
        }
        if(isset($_GET['error'])) {
            
            echo "<p>Te has pasado de listo, calisto<p>"; 
        }

   ?>
    
    
     
</body>

</html>

    