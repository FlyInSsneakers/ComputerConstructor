<?php


session_start();


require_once '../base/connect_base.php';

$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));
if (isset($_POST['login'])) {
	
	# code...

	$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
	$pass = md5($pass."qwedhf547");
	$sql = "SELECT login, password FROM `user` WHERE user.login = '$login' and user.password = '$pass' ";
	$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));

	if(mysqli_num_rows($result) == 0){
		echo "не верный логин или пароль";
		exit();
	}
	else
		$_SESSION["login"] = $login;

}
else
	echo "Что то пошло не так";


?>