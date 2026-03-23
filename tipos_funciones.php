<?php

//50 Funciones nativas principales de PHP:

//1. echo() Muestra una o mas cadenas de texto en la pantalla.
echo "Hola Mundo";

//2. print() imprime una cadena, pero a diferencia de echo, print devuelve un valor (1) y puede ser usado en expresiones.
print "Hola Como estas?";

//3. var_dump() muestra información detallada sobre una variable, incluyendo su tipo y valor.
$variable = "Curso de Informatica 2026";

// 4. print_r() muestra información legible sobre una variable, especialmente útil para arrays y objetos.
$array = array("Manzana", "Banana", "Naranja");
print_r($array);

// 5. strlen() Retorna la longitud (número de caracteres) de una cadena.
$cadena="Subteniente de Artillería";
echo strlen($cadena);

// 6. str_replace() Reemplaza cualquier palabra que querramos por otra que deseemos.
$texto = "El perro es mi amigo";
$texto = str_replace("perro", "gato", $texto);
echo $texto;

// 7. strpos() Encuentra la posición de la primera aparición de una subcadena en una cadena.
$frase = "El cielo es azul";    
echo strpos($frase, "cielo");

// 8. substr() Retorna una parte de una cadena, indicando inicio y longitud.
$cadena = "Programación en PHP";
$subcadena = substr($cadena, 0, 13);
echo $subcadena;

//9. strtoupper() Convierte una cadena a mayúsculas.
$cadena = "Subteniente de Artillería Miguelangel Josué Cruz Sagastume";
echo strtoupper($cadena);

//10. trim() Elimina espacios en blanco u otros caracteres especificados al inicio y al final de una cadena.
$cadena = "   Hola Mundo   ";
echo trim($cadena);

//11. strtolower() Convierte una cadena a minúsculas.
$cadena = "SUBTENIENTE DE ARTILLERÍA MIGUELANGELO JOSUÉ CRUZ SAGASTUME";
echo strtolower($cadena);

// 12. explode() Divide una cadena en un array utilizando un delimitador específico.
$cadena = "Manzana, Banana, Naranja";
$array = explode(", ", $cadena);
print_r($array);

// 13. implode() Une los elementos de un array en una cadena utilizando un delimitador específico.
$array = array("Manzana", "Banana", "Naranja"); 
$cadena = implode(". ", $array);
echo $cadena;

//14. count() cuenta cuantos elementos hay en un array o cuántas propiedades tiene un objeto.
$array = array("Manzana", "Banana", "Naranja");
echo count($array);

// 15. is_array() Verifica si una variable es un array.
$variable = array("Manzana", "Banana", "Naranja");
if (is_array($variable)) {
    echo "Es un array";
} else {
    echo "No es un array";
}

// 16. array_merge() Combina dos o más arrays en uno solo.
$array1 = array("Manzana", "Banana");
$array2 = array("Naranja", "Pera");
echo implode(", ", array_merge($array1, $array2));

// 17. array_push() Inserta uno mas elmentos al final del array.
$array = array("Manzana", "Banana");
array_push($array, "Naranja", "Pera");
print_r($array);

// 18. array_pop() Elimina el último elemento de un array y lo retorna.
$array = array("Manzana", "Banana", "Naranja");
$ultimoElemento = array_pop($array);
echo $ultimoElemento; // Imprime "Naranja"

// 19. array_shift() Quita el primer elemento del array y lo retorna.
$array = array("Manzana", "Banana", "Naranja");
$primerElemento = array_shift($array);
echo $primerElemento; // Imprime "Manzana"

// 20. array_keys() Devuelve todas las llaves (nombres de los indices) de un array.
$array = array("", "",  "Manzana" => 1, "Banana" => 2, "Naranja" => 3);
$llaves = array_keys($array);
print_r($llaves);

//21. array_values() Devuelve todos los valores de un array.
$array = array("",  "", "Manzana" => 1, "Banana" => 2, "Naranja" => 3);
$valores = array_values($array);
print_r($valores);




