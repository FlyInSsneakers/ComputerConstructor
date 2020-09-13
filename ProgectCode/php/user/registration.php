<?php
require_once '../base/connect_base.php';

$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));

$login = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING,FILTER_SANITIZE_EMAIL);

$sql = "SELECT login, email FROM `user` WHERE user.login = '$login' or user.email = '$email' ";
$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));

if(mysqli_num_rows($result) > 0){
    echo "Пользователь с таким логином или с таким emal уже зарегестрирован";
    exit();
}

if ($_POST['password'] != $_POST['password_confirmation']) {
    echo "Пароли не совпадают";
    exit();
}

if ($_POST['password'] == "") {
    echo "Придумайте пароль";
    exit();
}

$pass = md5($pass."qwedhf547");

$mysql = $link;

$mysql->query("INSERT INTO `user` (`login`, `password`, `email`) VALUES('$login', '$pass', '$email')");

session_start();

$_SESSION["login"] = $login;


header('Location: ../../index.php');


?>