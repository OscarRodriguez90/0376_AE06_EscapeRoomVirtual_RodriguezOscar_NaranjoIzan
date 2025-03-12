<?php
session_start();

// Verifica si el usuario inicia desde la pantalla de inicio
if (isset($_POST['index'])) {
    $_SESSION['pantalla0'] = "check";
    header('Location: ../views/pantalla0.php');
    exit();
}

// Validación de la pantalla 0 (Acertijo 1)
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

        // Pistas por cada respuesta incorrecta
        if ($respuesta_texto != $respuesta_correcta_texto) {
            $pista .= "Pista para el acertijo: Este algo avanza con el tiempo, pero cuando lo pierdes no lo puedes recuperar. ";
        }

        if ($respuesta_numerica != $respuesta_correcta_numerica) {
            $pista .= "Pista para la pregunta numérica: Si la mitad de un dia son 12 horas, ¡piensa en cuántas horas tiene un día completo! ";
        }

        if ($respuesta_interactiva != $respuesta_correcta_interactiva) {
            $pista .= "Pista para la pregunta interactiva: Un kilogramo de cualquier cosa pesa lo mismo que un kilogramo de otra cosa. ";
        }

        // Redirigimos con las pistas correspondientes
        header("Location: ../views/pantalla0.php?pista1=" . urlencode($pista));
        exit();
    }
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
            $pista .= "Sumar añade números, restar quita números. ";
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
}

// Validación de la pantalla 2 (Acertijo clásico)
if (isset($_POST['pantalla2'])) {
    // Variables para las respuestas
    $respuesta_agujero = strtolower(trim($_POST['agujero'])); 
    $respuesta_numero = $_POST['numero']; 
    $respuesta_calculo = $_POST['calculo']; 
    $respuesta_ortografia = strtolower(trim($_POST['pregunta_ortografia'])); 

    // Comprobamos las respuestas
    $respuesta_correcta_agujero = "agujero"; 
    $respuesta_correcta_numero = 9; 
    $respuesta_correcta_calculo = 7; 
    $respuesta_correcta_ortografia = "afasia"; // Respuesta correcta de ortografía

    // Verificamos las respuestas y damos pistas si es incorrecto
    if ($respuesta_agujero == $respuesta_correcta_agujero && $respuesta_numero == $respuesta_correcta_numero && $respuesta_calculo == $respuesta_correcta_calculo && $respuesta_ortografia == $respuesta_correcta_ortografia) {
        $_SESSION['pantalla3'] = "check";
        header("Location: ../views/pantalla3.php");
        exit();
    } else {
        // Si alguna respuesta es incorrecta, damos una pista.
        $pista = '';

        if ($respuesta_agujero != $respuesta_correcta_agujero) {
            $pista .= "Pista para el acertijo: " . "A menudo se encuentra en las cosas que ves todos los días, pero no puedes tocarlas."; 
        }
        
        if ($respuesta_numero != $respuesta_correcta_numero) {
            $pista .= "<br>Pista para el número de letras en 'relámpago': " . "Es una palabra corta, pero con una gran carga de energía."; 
        }

        if ($respuesta_calculo != $respuesta_correcta_calculo) {
            $pista .= "<br>Pista para el cálculo: " . "Si te quedan pocas, ¿cuántas te quedarían después de regalar algunas?"; 
        }

        if ($respuesta_ortografia != $respuesta_correcta_ortografia) {
            $pista .= "<br>Pista para la ortografía: " . "Es un trastorno neurológico que afecta la capacidad de hablar, ¡pero no lleva tilde!"; 
        }

        // Redirigimos con las pistas correspondientes
        header("Location: ../views/pantalla2.php?pista2=" . urlencode($pista));
        exit();
    }
}

// Validación de la pantalla 3 (Acertijo modificado)
if (!isset($_SESSION["pantalla2"]) || $_SESSION["pantalla2"] !== "check") {
    header("Location: ../index.php?error=pillo");
    exit();
}

if (isset($_POST['pantalla3'])) {
    // Respuestas del formulario
    $riddle_numero = $_POST['riddle_numero']; // Respuesta del primer acertijo numérico
    $palabra_reversa = strtolower(trim($_POST['palabra_reversa'])); // Respuesta del segundo acertijo (palabra reversa)
    $problema_logico = $_POST['problema_logico']; // Respuesta del tercer acertijo (problema lógico)

    // Respuestas correctas
    $respuesta_correcta_riddle_numero = 4500; // 1 hora y 15 minutos = 4500 segundos
    $respuesta_correcta_palabra_reversa = "arenera"; // Palabra que es un palíndromo
    $respuesta_correcta_problema_logico = 365; // Días del año (no bisiesto)

    // Comprobamos las respuestas
    if ($riddle_numero == $respuesta_correcta_riddle_numero && $palabra_reversa == $respuesta_correcta_palabra_reversa && $problema_logico == $respuesta_correcta_problema_logico) {
        // Si todas las respuestas son correctas, pasamos a la siguiente pantalla
        $_SESSION['pantalla3'] = "check";
        header('Location: ../views/pantalla4.php');
        exit();
    } else {
        // Si alguna respuesta es incorrecta, damos una pista.
        $pista = "Pista: ";

        // Comprobamos cada respuesta individualmente y proporcionamos pistas
        if ($riddle_numero != $respuesta_correcta_riddle_numero) {
            $pista .= "Recuerda que 1 hora tiene 3600 segundos y 15 minutos son 900 segundos. "; // Pista para el acertijo numérico
        }

        if ($palabra_reversa != $respuesta_correcta_palabra_reversa) {
            $pista .= "Es una palabra que se lee igual al revés y al derecho. "; // Pista para la palabra reversa
        }

        if ($problema_logico != $respuesta_correcta_problema_logico) {
            $pista .= "Piensa en los días del año, no en los meses ni en las estaciones. "; // Pista para el problema lógico
        }

        // Redirigimos con las pistas correspondientes
        header("Location: ../views/pantalla3.php?pista3=" . urlencode($pista));
        exit();
    }
} else {
    // Si no se envió el formulario correctamente
    header("Location: ../index.php");
    exit();
}
?>

