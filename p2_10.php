<html>
<head>
<title>Hola Mundo</title>
<meta charset="UTF-8">
</head>
<body>
<?php
DEFINE("JUDIAS",1.70);
DEFINE("PERAS",1.20);
DEFINE("MANZANA",1.50);
DEFINE("PIÑA", 2.10);
DEFINE("SANDIA", 1.40);
DEFINE("MELON", 1.30);
DEFINE("FRESAS",2.00);
DEFINE("BARATO",1.50);
$peso_judias = 1.521;
$peso_peras = 1.670;
$peso_manzana = 1.789;
$peso_piña = 2.234;
$peso_sandia = 3.129;
$peso_melon = 3.000;
$peso_fresas = 1.32;

echo "<table><tr><td>Fruta</td><td>PVP</td><td>Peso</td></tr>";
echo "<tr><td>Judias</td><td>".JUDIAS."</td><td>".$peso_judias."</td></tr>";
echo "<tr><td>Peras</td><td>".PERAS."</td><td>".$peso_peras."</td></tr>";
echo "<tr><td>Manzanas</td><td>".MANZANA."</td><td>".$peso_manzana."</td></tr>";
echo "<tr><td>Piña</td><td>".PIÑA."</td><td>".$peso_piña."</td></tr>";
echo "<tr><td>Sandia</td><td>".SANDIA."</td><td>".$peso_sandia."</td></tr>";
echo "<tr><td>Melon</td><td>".MELON."</td><td>".$peso_melon."</td></tr>";
echo "<tr><td>Judias</td><td>".FRESAS."</td><td>".$peso_fresas."</td></tr></table><br>";
if (JUDIAS < BARATO){
	echo "Las judías están más baratas de un <b>1.50€!</b><br>";
}
if (PERAS < BARATO){
	echo "Las peras están más baratas de un <b>1.50€!</b><br>";
}
if (MANZANA < BARATO){
	echo "Las manzanas están más baratas de un <b>1.50€!</b><br>";
}
if (PIÑA < BARATO){
	echo "Las piñas están más baratas de un <b>1.50€!</b><br>";
}

if (SANDIA < BARATO){
	echo "Las sandias están más baratas de un <b>1.50€!</b><br>";
}

if (MELON < BARATO){
	echo "El melón están más baratas de un <b>1.50€!</b><br>";
}
if (FRESAS < BARATO){
	echo "Las fresas están más baratas de un <b>1.50€!</b><br>";
}

// vamos a por la segunda tanda de comparaciones para ver que productos están más baratos que otros

if (JUDIAS < PERAS){
	echo "Las judías son más baratas que las <b>peras!</b><br>";
}

if (JUDIAS < MANZANA){
	echo "Las judías son más baratas que las <b>manzanas!</b><br>";
}

if (JUDIAS < PIÑA){
	echo "Las judías son más baratas que las <b>piñas!</b><br>";
}

if (JUDIAS < SANDIA){
	echo "Las judías son más baratas que las <b>sandias!</b><br>";
}

if (JUDIAS < MELON){
	echo "Las judías son más baratas que las <b>melón!</b><br>";
}

if (JUDIAS < FRESAS){
	echo "Las judías son más baratas que las <b>fresas!</b><br>";
}


?>
</body>
</html