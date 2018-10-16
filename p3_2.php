<?php 
/*
Práctica 3.2. Muestra de la frase "El perro de San Roque no tiene rabo":
• Las letras totales de la frase.
• El número de palabras de la frase.
• Una línea con el número de letras de cada palabra.
*/
$frase = "El perro de San Roque no tiene rabo";

$letrastotales = strlen($frase);
$numpalabras = str_word_count($frase);
$palabras = explode(" ",$frase);

echo "La frase: <ins>".$frase."</ins><br>";

echo "<strong>Esta frase tiene:</strong>".$letrastotales." letras en total<br>";

echo "<strong>Esta frase tiene:</strong> ".$numpalabras." <strong>numero de palabras</strong><br>";
for ($i=0;$i<$numpalabras;$i++){
	echo "<em>Finalmente la frase tiene ".strlen($palabras[$i])."<br>";
}
//print_r($palabras);
?>