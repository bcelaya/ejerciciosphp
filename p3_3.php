<?php
/*
Comprobar si un NIF es válido. Un NIF ha de constar
exactamente de 8 números y una letra. Para comprobar si un carácter
es un número o una letra se puede usar la función ord() que nos da el
código ASCII de dicho carácter. En el código ASCII los números se
encuentran en las posiciones 48 a 57 y las letras en las posiciones 65 a 90
(mayúsculas) y 97 a 122 (minúsculas). Una vez comprobado que es
correcto debe mostrar el DNI por pantalla con la última letra en
mayúsculas, independientemente de como estuviera en el dato de
entrada.
Un ejemplo con llamadas a la función ord():
*/

$dni = '20461396k';
$comprobacionnumeros = false;
$longitudstring = strlen($dni)-1;
echo $longitudstring." <-- longitud string DNI<br>";
echo $longitudstring."<-- posicion de la letra: ".$dni[$longitudstring]."<br>";
// Vamos a comprobar que los primero ocho carácteres del dni son numeros
for ($i=0;$i<$longitudstring;$i++){
	if ((ord($dni[$i])>=48) && (ord($dni[$i])<=57)){
		$comprobacionnumeros = true;
		echo "Numero: ".$dni[$i]." <-- Correcto<br>";
		}
	else
		{
		echo "Ha introducido un caracter que no es numero: ".$dni[$i];
		}
	}

if (((ord($dni[8])>=97) && (ord($dni[8])<=122)) || ((ord($dni[8])>=65) && (ord($dni[8])<=90))) {
		$comprobacionletra = true;
		echo "Letra correcta<br>";
	}

if (($comprobacionletra==true) && ($comprobacionnumeros==true)){
	echo "el dni: ".$dni." es correcto.";
}
?>