
<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Envio de datos</title>
    <link rel="stylesheet" href="styles.css">
    <i class="fa-solid fa-cat"></i>
    <link rel="icon" href="../img/cat-solid.svg">
</head>
<body class="pantalla-index">
    <h1>La Maldición de la Pirámide</h1>
    <p>"Has osado adentrarte en los secretos de esta antigua pirámide... pero la maldición de los dioses 
        ha caído sobre ti. Las puertas han sellado tu destino, y solo aquellos dignos podrán escapar."
    "Cuatro pruebas te esperan. Cuatro desafíos que pondrán a prueba tu ingenio, tu valor y tu astucia.
    Solo superándolos demostrarás ser digno de la libertad."
    "El tiempo corre, forastero... ¿Serás capaz de romper la maldición y salir con vida?"
    ¡Que los dioses tengan piedad de tu alma!</p>
    
    <form action="./proc/resolver.proc.php" method="POST">
    
    <button type="submit" name="index">Empieza el reto</button>
        
    </form>
    
    
</form>
    <?php if (isset($_GET['error'])): ?>
            <p class="error text-danger mt-3">Te has pasado de listo, calisto ☝️🤓</p>
        <?php endif; ?>
    
     
</body>

</html>

    