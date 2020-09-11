<?php


require_once 'base/connect_base.php';

$group = [ "VideoCard", "SSD", "HDD", "MotherBoard"];

$components = array();

session_start();

// echo $_POST["group"];

if (isset($_POST["group"])) {
	$num = $_POST["group"];

	checkComponent($group,$num);

}

function checkComponent($group,$num){
	if (!isset($_SESSION[$group[$num]])) {
		if ($group[$num]=="SSD" || $group[$num]=="HDD" || $group[$num]=="VideoCard"){

			$_SESSION[$group[$num]] = [$_POST["id"], 1];
			echo $_SESSION[$group[$num]][1];
		
		}
		else{
			$_SESSION[$group[$num]] = [$_POST["id"], 1];
			echo $_SESSION[$group[$num]][1];	
		}
	}
	elseif($_SESSION[$group[$num]][0] == $_POST["id"]){

		if ($group[$num]=="SSD" || $group[$num]=="HDD" || $group[$num]=="VideoCard"){
			$_SESSION[$group[$num]] = [ $_POST["id"], $_SESSION[$group[$num]][1] + 1];
			echo $_SESSION[$group[$num]][1];
		}
		else{
			echo "уже выбрана";
		}
	}
	else
		echo "Изменить комплектующую?";
}





?>