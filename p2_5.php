<html>
<head>
<title>Hola Mundo</title>
<meta charset="UTF-8">
</head>
<body>
<?php
$nombre = "Bruno";
$apellido1 = "Celaya";
$apellido2 = "Montero";
$edad = 41;
$domicilio = "C/ Hernán Cortés Nº45 2-F";
$cp = "12580";
$tlf = "640588392";
$profesion = "Miembro de los Vengadores";

echo "Hola, mi nombre es <b>".$nombre."</b> <b>".$apellido1." ".$apellido2."</b><br>";
echo "Mi edad es <b>".$edad." años</b> "."y vivo en <b>".$domicilio."</b> con código postal: <b>".$cp."</b><br>";
echo "Mi número de teléfono es <b>".$tlf."</b> y actualmente trabajo como <b>".$profesion."</b><br>";
echo ":-)";
?>
</body>
</html