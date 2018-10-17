<?php 
include '/brumon/usuarios.php';
$usuarios = array(	"Juan" => "draco",
					"Luisa" => "bacbab",
					"Antonio" => "olmo");
//print_r($usuarios);

$user = ($_GET["user"]);
$passwd = ($_GET["passwd"]);
//echo $user."<br>";
//echo $passwd."<br>";
$loginuser = false;
$loginpasswd = false;

foreach ($usuarios as $usuario => $key) {
	# code...
	//echo "usuario actual: ".$key." , el valor es: ".$value."<br/>";
	//echo $user."--".$usuario."<br>";
	//echo $key."<br>";
	//echo $value."<br>";
	if (($user===$usuario) && ($passwd===$key)){
		$loginuser = true;
		$loginpasswd = true;
		//echo "Validación correcta";
	}
}
if (($loginuser == true) && ($loginpasswd==true)){
header("location:/brumon/ok.php");
	//echo "DEBUG: OK loginuser: "/*.var_dump($loginuser).*/"<br> valor loginpasswd: ".var_dump($loginpasswd)."<br>";
}
else{
header("location:/brumon/error.html");
	//echo "DEBUG: ERROR loginuser: ".var_dump($loginuser)."<br> valor loginpasswd: ".var_dump($loginpasswd)."<br>";
}

//echo "Aquí hemos recibido como usuario: ".$user." y como password: ".$passwd;

?>