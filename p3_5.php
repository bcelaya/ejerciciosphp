<?php
/*
Práctica 3.5. Haz un array indexado numéricamente que contenga las
letras del abecedario en minúsculas. Luego recórrelo, y muéstralo por
pantalla cada letra del array, primero en minúsculas y luego en
mayúsculas. 97 a 122 (minúsculas)
*/
$comienzo = 97;
$final = 122;
$minusculas = array();
$indice=0;
echo "El resultado es:".chr(97);

for ($i=$comienzo;$i<=$final;$i++){
 	$indice++;
 	echo $i."<br>";
 	$minusculas[$indice] = chr($i);
}

echo "El array minusculas tiene un numero de ".count($minusculas)." elementos<br>";
foreach ($minusculas as $letra) {
	echo $letra."<br>";
}
?>