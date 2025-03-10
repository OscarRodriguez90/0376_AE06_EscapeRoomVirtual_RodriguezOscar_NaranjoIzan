<?php 

if(isset($_POST['index']) && $_SERVER["REQUEST_METHOD"] == 'POST'){
    
    session_start();
    $_SESSION['pantalla0'] = "check";
    header('Location: ../views/pantalla0.php');
    exit(); 

} else if (isset($_POST['index'])){

    header('Location: ../index.php?pista1=Todos lo tenemos, pero nunca suficiente.');
    exit();

}if(isset($_POST['pantalla0']) && isset($_POST['tiempo']) && strtolower($_POST['tiempo']) == "tiempo" ){
    
    session_start();
    $_SESSION['pantalla1'] = "check";
    header('Location: ../views/pantalla1.php');
    exit(); 

} else if (isset($_POST['pantalla0'])){

    header('Location: ../views/pantalla0.php?pista1=Todos lo tenemos, pero nunca suficiente.');

    exit();

} else if(isset($_POST['pantalla1']) && strtolower($_POST['silencio']) == "silencio" ){
    
    session_start();
    $_SESSION['pantalla2'] = "check";
    header('Location: ../views/pantalla2.php'); 
    exit(); 

} else if (isset($_POST['pantalla1'])){

    header('Location: ../views/pantalla1.php?pista2=A veces lo buscas cuando hay demasiado ruido.');
    exit();

} else if(isset($_POST['pantalla2']) && strtolower($_POST['silencio']) == "silencio" ){
    
    session_start();
    $_SESSION['pantalla2'] = "check";
    header('Location: ../views/pantalla3.php'); 
    exit(); 

} else if (isset($_POST['pantalla2'])){

    header('Location: ../views/pantalla2.php?pista2=A veces lo buscas cuando hay demasiado ruido.');
    exit();

} else if(isset($_POST['pantalla3']) && strtolower($_POST['silencio']) == "silencio" ){
    
    session_start();
    $_SESSION['pantalla3'] = "check";
    header('Location: ../views/pantalla4.php'); 
    exit(); 

} else if (isset($_POST['pantalla3'])){

    header('Location: ../views/pantalla3.php?pista2=A veces lo buscas cuando hay demasiado ruido.');
    exit();
}

?>