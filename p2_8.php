<html>
<head>
<title>Hola Mundo</title>
<meta charset="UTF-8">
</head>
<body>
<?php
DEFINE("JUDIAS",1.10);
DEFINE("PERAS",1.20);
DEFINE("MANZANA",1.50);
DEFINE("PIÑA", 2.10);
DEFINE("SANDIA", 1.40);
DEFINE("MELON", 1.30);
DEFINE("FRESAS",2.00);
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
echo "<tr><td>Judias</td><td>".FRESAS."</td><td>".$peso_fresas."</td></tr></table>";

?>
</body>
</html