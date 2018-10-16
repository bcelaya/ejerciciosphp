<?php
/*
Práctica 3.8. En esta práctica se pide crear una array asociativo con
parejas de datos nombres de persona - altura. Luego se usará una
estructura foreach para recorrerlo y mostrar, por cada elemento del
array, el mensaje correspondiente del tipo "María mide 1.75 m".
*/

$personas = array("Maria"=>"1,70","Bruno"=>"1,73","Dafne"=>"1,20");
foreach ($personas as $p => $p_valor){
	echo "La siguiente persona: ".$p." mide ".$p_valor." de altura<br>";
}

?>