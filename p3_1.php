<?php 
/*Práctica 3.1. Crea la función mostrar_impares que muestre los
caracteres en posiciones impares de una cadena predefinida. Ejecútalo
con la frase "A quien madruga Dios le ayuda".*/

// Aquí guardamos la variable con la frase del ejemplo

$frase = "A quien madruga Dios le ayuda";

$tope = strlen($frase);

echo $tope."<br>";

echo $frase[0]."<br>";

function mostrar_impares($frase, $i){
	echo $frase[$i];
	}


for ($i=0; i<=$tope; $i++){

	if ($i%2!=0){
	mostrar_impares($frase, $i);
	}
}
?>