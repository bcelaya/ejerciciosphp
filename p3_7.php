<?php
/*
Práctica 3.7. Modifica el programa anterior para que el desplazamiento
sea variable. Es decir, en un desplazamiento 3 se transforma la letra por
la que está 3 posiciones más adelante.
*/
//$comienzo = 66;
//$final = 122;

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
		$temp = $temp + 3;
		if ($temp == 123){
			$temp = 97;
		}
		if ($temp == 124){
			$temp = 98;
		}
		if ($temp == 125){
			$temp = 99;
		}
	}
	
	//Aqui la vuelvo a convertir en caracter;
	$codificada[$i]=chr($temp);
	echo ($codificada[$i])."<--volvemos a convertir en caracter<br>";
	print_r($codificada)." <-- este es el string final codificado";
	//Probando un foreach a ver si me acostumbro a su sintaxis
	foreach($codificado as $resultado) {
    echo $resultado;
	}
}


?>