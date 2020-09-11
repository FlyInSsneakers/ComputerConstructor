<?php


session_start();

if (isset($_POST["text"])){
	$_SESSION['component'] = $_POST["text"];
	echo $_SESSION['component'];	
}

?>