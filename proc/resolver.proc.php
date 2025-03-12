<?php
session_start();

// Verifica si el usuario inicia desde la pantalla de inicio
if (isset($_POST['index'])) {
    $_SESSION['pantalla0'] = "check";
    header('Location: ../views/pantalla0.php');
    exit();
}

// Validación de la pantalla 0 (Acertijo 1)

session_start();

if (isset($_POST['pantalla0'])) {
    
    $respuesta_texto = strtolower(trim($_POST['tiempo'])); 
    $respuesta_numerica = $_POST['número'];
    $respuesta_interactiva = $_POST['pregunta_interactiva'];

    // Respuestas correctas
    $respuesta_correcta_texto = "tiempo"; 
    $respuesta_correcta_numerica = 24; 
    $respuesta_correcta_interactiva = "igual"; 

    
    if ($respuesta_texto == $respuesta_correcta_texto && $respuesta_numerica == $respuesta_correcta_numerica && $respuesta_interactiva == $respuesta_correcta_interactiva) {
        
        $_SESSION['pantalla1'] = "check";
        header('Location: ../views/pantalla1.php');
        exit();
    } else {
        
        $pista = "";

       
        if ($respuesta_texto != $respuesta_correcta_texto) {
            $pista .= "Pista para el acertijo: Este algo avanza con el tiempo, pero cuando lo pierdes no lo puedes recuperar. ";
        }

        
        if ($respuesta_numerica != $respuesta_correcta_numerica) {
            $pista .= "Pista para la pregunta numérica: Si la mitad de un dia son 12 horas, ¡piensa en cuántas horas tiene un día completo! ";
        }

      
        if ($respuesta_interactiva != $respuesta_correcta_interactiva) {
            $pista .= "Pista para la pregunta interactiva: Un kilogramo de cualquier cosa pesa lo mismo que un kilogramo de otra cosa. ";
        }

      
        header("Location: ../views/pantalla0.php?pista1=" . urlencode($pista));
        exit();
    }
} else {
   
    header("Location: ../index.php");
    exit();
}


// Validación de la pantalla 1 (Nuevo reto interactivo con 3 inputs)
if (isset($_POST['pantalla1'])) {
    $math = trim($_POST['math']); // Pregunta 1: Matemáticas
    $word = strtolower(trim($_POST['word'])); // Pregunta 2: Reordenar palabra
    $select = strtolower(trim($_POST['select'])); // Pregunta 3: Selección correcta

    if ($math == "15" && $word == "sapo" && $select == "luna") {
        $_SESSION['pantalla2'] = "check";
        header('Location: ../views/pantalla2.php');
        exit();
    } else {
        $pista = "Pista: ";
        if ($math != "15") {
            $pista .= "Sumar añade numeros, restar quita numeros. ";
        }
        if ($word != "sapo") {
            $pista .= "Reordena estas letras: O, P, S, A (Es un animal). ";
        }
        if ($select != "luna") {
            $pista .= "No es el sol, pero brilla en la noche. ¿Qué será? ";
        }
        header("Location: ../views/pantalla1.php?pista2=$pista");
        exit();
    }
} else {
   
    header("Location: ../index.php");
    exit();
}

// Validación de la pantalla 2 (Acertijo clásico)
if (isset($_POST['pantalla2']) && strtolower(trim($_POST['silencio'])) == "silencio") {
    $_SESSION['pantalla3'] = "check";
    header('Location: ../views/pantalla3.php');
    exit();
} else if (isset($_POST['pantalla2'])) {
    header('Location: ../views/pantalla2.php?pista2=A veces lo buscas cuando hay demasiado ruido.');
    exit();
}

// Validación de la pantalla 3 (Acertijo modificado)
if (isset($_POST['pantalla3']) && strtolower(trim($_POST['respuesta'])) == "correcta") {
    $_SESSION['pantalla4'] = "check";
    header('Location: ../views/pantalla4.php');
    exit();
} else if (isset($_POST['pantalla3'])) {
    header('Location: ../views/pantalla3.php?pista3=Observa con atención, la clave está frente a ti.');
    exit();
}
?>
