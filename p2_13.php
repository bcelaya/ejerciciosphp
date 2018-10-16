<html>
<head>
<title>Hola Mundo</title>
<meta charset="UTF-8">
</head>
<body>
<?php
$horas = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","00");
$minutos = array("00","15","30","45");
$longitud = count($horas);
$longmin = count($minutos);
echo $longitud."<br>";
echo $longmin."<br>";

for ($i=0; $i<$longitud; $i++){
	for ($x=0; $x<$longmin; $x++){
		echo $horas[$i].":".$minutos[$x]."<br>";
	}
}


?>

</body>
</html>