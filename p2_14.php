<html>
<head>
<title>Hola Mundo</title>
<meta charset="UTF-8">
</head>
<body>
<?php
$horas = array("1","2","3","4","5","6","7","8","9","10","11","12");
$minutos = array("00","15","30","45");
$formato = array("AM","PM");
$longitud = count($horas);
$longmin = count($minutos);
$longform = count($formato);
echo $longitud."<br>";
echo $longmin."<br>";
echo $longform."<br>";
for ($y=0; $y<$longform; $y++){
	for ($i=0; $i<$longitud; $i++){
		for ($x=0; $x<$longmin; $x++){
			echo $horas[$i].":".$minutos[$x]." ".$formato[$y]."<br>";
		}
	}
}


?>

</body>
</html>