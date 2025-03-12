<?php
//array indexado

//declaramos variable con $
//declaramos dentro del arreglo
//como es un arreglo indexado accedemos a
//los valores que hay dentro de frutas con el indice ques es 0
// el  . PHP_EOL; (end of line) es para concatenar un espacio en blanco
$frutas = array("Manzana", "Banano", "Fresa");

//FUNCION push: debemos indicar cual es el arreglo al cual le queremos agregar mas registros
array_push ($frutas,"Pera");
//FUNICION search: para hacer busquedas, en este caso donde esta fresa dentro del arreglo
//para usar esta funcion se debe utilizar dentro de una variable
echo $frutas[3] . PHP_EOL;
$posicion = array_search("Fresa", $frutas);



//array asociativo
$edades = array("Juan" => 25, "Ana" => 22, "Pedro" => 30);
echo $edades['Juan'] . PHP_EOL;
 
//arreglo multidimensional
$personas = array(
    //tiene arreglos dentro del arreglo
    array("Nombre" => "Juan", "Edad" => 25),
    array("Nombre" => "Ana", "Edad" => 22)
);
//lo que vamos a ver en pantalla 
echo $personas[1]["Nombre"] . PHP_EOL;

//FUNCION merge: fusion de arreglos
$arreglo1 = array("Rojo", "Verde");
$arreglo2 = array("Azul", "Amarillo");
$arregloFusionado = array_merge($arreglo1, $arreglo2);
print_r($arregloFusionado);
 
//***39min***



// //function simple
// function saludar($nombre){
//     return "Hola ". $nombre;
// }
// echo saludar("Marlon") . PHP_EOL;
 
// //funcion anonima
// $suma = function ($a,$b){
//     return $a + $b;
// };
 
// echo $suma(5,10). PHP_EOL;
 
// //funcion de flecha
// $duplicar = fn($n) => $n * 2;
// echo $duplicar(10) . PHP_EOL;
 
// //function integrada
// $texto = "Hola Mundo";
// echo strlen($texto);
 
?>