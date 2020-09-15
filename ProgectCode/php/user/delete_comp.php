<?php
require_once '../base/connect_base.php'; 

if (isset($_POST["delete"])) {

	$id = $_POST["id"];

	echo $id;

	

	$query = "DELETE FROM computer WHERE computer.id='$id'";

	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

	mysqli_close($link);

	header('Location: ../../account.php');
}

if (isset($_POST["change"])) {

	$sessionComp = [ "VideoCard", "SSD", "HDD", "MotherBoard", "bp", "cooler", "ram", "cpu", "drive", "case"];

	$component = [ "graphics_card", "ssd", "hdd", "motherboard", "bp", "cool", "ram", "cpu", "drive", "casec"];

	session_start();

	for ($i=0; $i < count($component); $i++) { 

		$id = $_POST["id"];

		$link = mysqli_connect($host, $user, $password, $database)
		or die("Ошибка " . mysqli_error($link));

		$sql = "SELECT computer.$component[$i] 
		FROM `computer`
		WHERE computer.id='$id'";
		$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
		$row = mysqli_fetch_row($result);

		if ($component[$i]=="graphics_card" or $component[$i]=="ssd" or $component[$i]=="hdd" or $component[$i]=="ram") {

			$text = "computer.count_".$component[$i];
			$sql = "SELECT computer.$component[$i], $text
			FROM `computer`
			WHERE computer.id='$id'";
			
			$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
			$row = mysqli_fetch_row($result);
			if (isset($row) and $row[0]!=null) {

				$_SESSION[$sessionComp[$i]] = [$row[0],$row[1]] ;
			}

		}
		else {
			if (isset($row) and $row[0]!=null) {
				$_SESSION[$sessionComp[$i]] = [$row[0],1] ;
			}
		}

		$_SESSION["idcomp"] = $_POST["id"];
		$_SESSION["name"] = $_POST["name"];

		mysqli_close($link);

		header('Location: ../../designer.php');


		

	}



}


?>