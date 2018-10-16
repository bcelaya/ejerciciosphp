<?php
/*
Práctica 3.6. Haz un programa para codificar por desplazamiento una
frase utilizando el array de letras del ejercicio anterior. La idea es que
convierta cada letra por la siguiente del abecedario y a la última le
asigne la primera letra: a la "a" le corresponde la "b", a la "b" la "c", y así
sucesivamente hasta que a la "z" la "a". Si la frase contiene espacios
debe dejarlos igual.
Sugerencia: puede resultar útil la operación módulo para tratar los
índices del array.
*/
$palabra = "brunoz";
$longitudpalabra = strlen($palabra)-1;
$variacion = 1;
$temp = 0;
echo "longitud de la palabra: ".$longitudpalabra."<br>";
$codificada = array();

for ($i=0;$i<=$longitudpalabra;$i++)
{
	echo $palabra[$i]."<-- Esta letra.<br>";
	//Aqui la paso a numero ASCII
	$temp=ord($palabra[$i]);
	echo $temp."<-- Este es el numero ascii<br>";
	if (($temp>=97) && ($temp<=122)){
		$temp = $temp + 1;
		if ($temp == 123){
			$temp = 97;
		}
	}
	
	//Aqui la vuelvo a convertir en caracter;
	$codificada[$i]=chr($temp);
	echo ($codificada[$i])."<--volvemos a convertir en caracter<br>";
	print_r($codificada)." <-- este es el string final codificado";
	//Probando un foreach a ver si me acostumbro a su sintaxis
	foreach($codificado as $resultado) {
    echo $resultado. '<br>';
	}
}


?>