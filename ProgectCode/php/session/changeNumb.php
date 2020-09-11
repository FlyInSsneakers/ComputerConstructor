<?php

session_start();

if(isset($_POST["id"])){
	$component = ["SSD", "HDD", "VideoCard"];


	for ($i=0; $i < count($component); $i++) { 

		if (isset($_SESSION[$component[$i]])) {
			echo $_SESSION[$component[$i]][0];
		echo $_POST["id"];
		}
		


		if (isset($_SESSION[$component[$i]][0]) and $_SESSION[$component[$i]][0] == $_POST["id"]) {
			echo "еще да";
			if ($_SESSION[$component[$i]][1] == 1 and $_POST["sign"] < 0) 
				unset($_SESSION[$component[$i]]);
			else
				$_SESSION[$component[$i]][1] = $_SESSION[$component[$i]][1] + $_POST["sign"];  
		}
	}	
}


?>