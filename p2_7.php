<html>
<head>
<title>Hola Mundo</title>
<meta charset="UTF-8">
</head>
<body>
<?php
DEFINE("RADIO",6371.0);
DEFINE("DISTANCIA",150000000);
DEFINE("PI",3.1416);
$resultado = 2 * PI * RADIO;
$vueltas = DISTANCIA / $resultado;
echo "El radio de la tierra es de ".RADIO." km y la distancia de esta al sol es de unos ".DISTANCIA." km<br>";
echo "La distancia de una vuelta al mundo sería ".$resultado." km<br>";
echo "La distancia de la tierra al sol es el equivalente a :".$vueltas." al mundo";
?>
</body>
</html