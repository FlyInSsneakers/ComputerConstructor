<?php

require_once '../base/connect_base.php'; 
session_start();

if (isset($_POST["login"])) {

	if (isset($_POST["name"]) and $_POST["name"] != "") {


		$name = $_POST["name"];
		$login = $_SESSION["login"];

		$id = uniqid();

		$link = mysqli_connect($host, $user, $password, $database)
		or die("Ошибка " . mysqli_error($link));

		if ($_SESSION["idcomp"]) {
			$id = $_SESSION["idcomp"];
			$query = "UPDATE computer 
			SET Название='$name'
			WHERE id = '$id'";

			$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

		}
		else{
			$query = "INSERT INTO `computer` (`id`, `Название`) 
			VALUES('$id', '$name')";
			$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

			$query = "INSERT INTO `favorites_computers` (`login`, `id`) 
			VALUES( 
			(SELECT user.login
			FROM  `user`
			WHERE  user.login='$login'),
			(SELECT computer.id
			FROM  `computer`
			WHERE  computer.id='$id'))";
			$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
		}

		if (isset($_SESSION['VideoCard'])) {

			$video = $_SESSION['VideoCard'][0];
			$count = $_SESSION['VideoCard'][1];

			$query = "UPDATE computer 
			SET graphics_card=(
			SELECT graphics_card.Код
			FROM  `graphics_card`
			WHERE  graphics_card.Код=$video),
			count_graphics_card=$count
			WHERE id = '$id'";

			$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

		}

		if (isset($_SESSION['bp'])) {

			$bp = $_SESSION['bp'][0];
			$count = $_SESSION['bp'][1];

			$query = "UPDATE computer 
			SET bp=(
			SELECT bp.Код
			FROM  `bp`
			WHERE  bp.Код=$bp)
			WHERE id = '$id'";

			$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

		}

		if (isset($_SESSION['cpu'])) {

			$cpu = $_SESSION['cpu'][0];
			$count = $_SESSION['cpu'][1];

			$query = "UPDATE computer 
			SET cpu=(
			SELECT cpu.Код
			FROM  `cpu`
			WHERE  cpu.Код=$cpu)
			WHERE id = '$id'";

			$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));


		}

		if (isset($_SESSION['cooler'])) {

			$cooler = $_SESSION['cooler'][0];
			$count = $_SESSION['cooler'][1];

			$query = "UPDATE computer 
			SET cool=(
			SELECT cool.Код
			FROM  `cool`
			WHERE  cool.Код=$cooler)
			WHERE id = '$id'";

			$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

		}

		if (isset($_SESSION['MotherBoard'])) {

			$MotherBoard = $_SESSION['MotherBoard'][0];
			$count = $_SESSION['MotherBoard'][1];

			$query = "UPDATE computer 
			SET motherboard=(
			SELECT motherboard.Код
			FROM  `motherboard`
			WHERE  motherboard.Код=$MotherBoard)
			WHERE id = '$id'";

			$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

		}

		if (isset($_SESSION['ram'])) {

			$ram = $_SESSION['ram'][0];
			$count = $_SESSION['ram'][1];

			$query = "UPDATE computer 
			SET ram=(
			SELECT ram.Код
			FROM  `ram`
			WHERE  ram.Код=$ram),
			count_ram=$count
			WHERE id = '$id'";

			$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

		}

		if (isset($_SESSION['SSD'])) {

			$ssd = $_SESSION['SSD'][0];
			$count = $_SESSION['SSD'][1];

			$query = "UPDATE computer 
			SET ssd=(
			SELECT ssd.Код
			FROM  `ssd`
			WHERE  ssd.Код=$ssd),
			count_ssd=$count
			WHERE id = '$id'";

			$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

		}

		if (isset($_SESSION['HDD'])) {

			$hdd = $_SESSION['HDD'][0];
			$count = $_SESSION['HDD'][1];

			$query = "UPDATE computer 
			SET hdd=(
			SELECT hdd.Код
			FROM  `hdd`
			WHERE  hdd.Код=$hdd),
			count_hdd=$count
			WHERE id = '$id'";

			$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

		}

		if (isset($_SESSION['drive'])) {

			$drive = $_SESSION['drive'][0];
			$count = $_SESSION['drive'][1];

			$query = "UPDATE computer 
			SET drive=(
			SELECT drive.Код
			FROM  `drive`
			WHERE  drive.Код=$drive)
			WHERE id = '$id'";

			$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

		}


		if (isset($_SESSION['case'])) {

			$case = $_SESSION['case'][0];
			$count = $_SESSION['case'][1];

			$query = "UPDATE computer 
			SET casec=(
			SELECT casec.Код
			FROM  `casec`
			WHERE  casec.Код=$case)
			WHERE id = '$id'";

			$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

		}

		mysqli_close($link);

		$component = [ "VideoCard", "SSD", "HDD", "MotherBoard", "bp", "cooler", "ram", "cpu", "drive", "case"];
		for ($i=0; $i < count($component); $i++) { 
			unset($_SESSION[$component[$i]]);
		}
		if(isset($_SESSION["idcomp"])){
			unset($_SESSION["idcomp"]);
			unset($_SESSION["name"]);
		}

		header('Location: ../../account.php');
	}
	else{

		header('Location: ../../designer.php');

	}
}
else{
	header('Location: ../../designer.php');
}

?>