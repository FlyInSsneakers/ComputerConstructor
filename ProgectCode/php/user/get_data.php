<?php
require_once 'php/base/connect_base.php';

$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));


$login = $_SESSION["login"];

$sql = "SELECT login, email
FROM `user` 
WHERE user.login = '$login'";
$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));

if(mysqli_num_rows($result) == 0){
	echo "не верный логин или пароль";
	exit();
}

$row = mysqli_fetch_row($result);

$login = $row[0];
$email = $row[1];


$sql = "SELECT favorites_computers.id 
FROM `user`, `favorites_computers`
WHERE user.login = '$login' and user.login=favorites_computers.login";
$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));



$rows = mysqli_num_rows($result);

$block_res = array();
$rowarray = array();
for ($k=0; $k < $rows; $k++) { 
	$row = mysqli_fetch_row($result);
	if (isset($row)) {
		array_push($rowarray, $row[0]);
	}
}

$rez = array();


$component = [ "graphics_card", "ssd", "hdd", "motherboard", "bp", "cool", "ram", "cpu", "drive", "casec"];

for ($k=0; $k < count($rowarray); $k++) { 
	$id = $rowarray[$k];

	$price = 0;
	$name = "";

	for ($i=0; $i < count($component); $i++) { 
		$sql = "SELECT $component[$i].Цена, computer.Название 
		FROM `$component[$i]`, `computer`
		WHERE computer.id='$id' and $component[$i].код=computer.$component[$i]";
		$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
		$row = mysqli_fetch_row($result);

		if ($component[$i]=="graphics_card" or $component[$i]=="ssd" or $component[$i]=="hdd" or $component[$i]=="ram") {
			$text = "computer.count_".$component[$i];
			$sql = "SELECT $component[$i].Цена*$text, computer.Название 
			FROM `$component[$i]`, `computer`
			WHERE computer.id='$id' and $component[$i].код=computer.$component[$i]";
			$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
			$row = mysqli_fetch_row($result);
		}
		if (isset($row[0]) and $row[0] != 0)  {
			$price = $price + $row[0];
			$name =  $row[1];
		}
	}
	$rez[] = array($name, $id, $price.".00 р.");
}


?>