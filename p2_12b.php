<html>
<head>
<title>Hola Mundo</title>
<meta charset="UTF-8">
</head>
<body>
<?php
$horas = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","00");
$longitud = count($horas);
//echo $longitud;

for ($i=0; $i<$longitud; $i++){
	echo $horas[$i]."<br>";
}


?>

</body>
</html>