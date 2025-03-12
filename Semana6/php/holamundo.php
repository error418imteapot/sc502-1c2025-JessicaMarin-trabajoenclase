<!DOCTYPE html>
<html>

<head>
    <title>Hola mundo desde PHP</title>
</head>

<body>
    <?php
    echo "<p>Hola mundo en PHP</p>";
    // declaracion de variables con el signo de $ y luego el nombre de la variable
    //las variables fuera de una funcion son variables global
    //puede ser accedida desde cualquier funcion
    $nombre = "Jess"; 
    $contador = 9;
    $peso = 69.7;
    $mayorEdad = true;

    //si quiero usar una variable global dentro de una funcion, 
    //se llama en la funcion con la palabra reservada global seguido del nombre de la variable

    function miFunction()
    //una variable dentro de una funcion: variable local
    //solo tiene vida dentro de la funcion
    {
        $variableLocal = "Variable local"; 
        $nombre = "Juan";
        echo $variableLocal;
    }
    echo $nombre;

    miFunction();

    $edad = 21;
    //if simple
    if ($edad < 18) {
        echo "eres menor de edad";
    } elseif ($edad == 18) {
        echo "tienes 18";
    } else {
        echo "eres mayor de edad";
        $mayorEdad = true;
    }
    //anidados
    $membresia = true;
    if ($edad >= 18) {
        echo " Adulto";
        if ($membresia) {
            echo " miembro";
        }
    } else {
        echo "menor de edad";
        if ($membresia) {
            echo " y miembro";
        }
    }
    //switch
    $nota = "B";
    switch ($nota) {
        case "A":
            echo "Exc";
            break;

        case "B":
            echo "Muy bien";
            break;

        case "C":
            echo "Bien";
            break;
        default:
            echo "Necesitas mejorar";
            break;
    }
    ?>
</body>

</html>