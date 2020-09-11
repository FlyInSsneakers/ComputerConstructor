<?php

require_once '../class.php';
require_once '../base/connect_base.php';


session_start();


if(isset($_POST["id"])){
	$component = ["SSD", "HDD", 'VideoCard', 'MotherBoard'];

	for ($i=0; $i < count($component); $i++) { 
		if (isset($_SESSION[$component[$i]][0]) and $_SESSION[$component[$i]][0] == $_POST["id"]) {
			if ($_SESSION[$component[$i]][1] == 1 and $_POST["sign"] < 0) {
				unset($_SESSION[$component[$i]]);
			}
			else
				$_SESSION[$component[$i]][1] = $_SESSION[$component[$i]][1] + $_POST["sign"];  
		}
	}	
}

$components = array();

if (isset($_SESSION['VideoCard'])) {


	$check = $_SESSION['VideoCard'][0];
	$link = mysqli_connect($host, $user, $password, $database)
	or die("Ошибка " . mysqli_error($link));

	$sql = "SELECT graphics_card.Код, graphics_card.Наименование, graphics_card.Цена, graphics_card.Объем_видеопамяти, graphics_card.Частота_видеопамяти, graphics_card.Разъемы_дополнительного_питания, graphics_card.Интерфейс
	FROM  `graphics_card`
	where graphics_card.Код = $check";

	$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));

	$row = mysqli_fetch_row($result);

	$videoCard = new VideoCard($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]);

	$components[] = array("video", $row[2], $_SESSION['VideoCard'][1], $row[1], $row[0]);

	mysqli_close($link);


}

if (isset($_SESSION['PoverSupply'])) {

	$components[] = array("bp", $_SESSION['PoverSupply']);

}

if (isset($_SESSION['CPU'])) {

	$components[] = array("cpu", $_SESSION['PoverSupply']);

}

if (isset($_SESSION['Cooler'])) {



}

if (isset($_SESSION['MotherBoard'])) {



	$check = $_SESSION['MotherBoard'][0];
	$link = mysqli_connect($host, $user, $password, $database)
	or die("Ошибка " . mysqli_error($link));

	$sql = "SELECT motherboard.Код, motherboard.Наименование, motherboard.Цена, 
	motherboard.Socket, motherboard.Форм_фактор, motherboard.Слотов_PCI, motherboard.Разъемов_SATA3, motherboard.Разъемов_M2, motherboard.Кол_во_внешних_USB_2, motherboard.Кол_во_внешних_USB_3_0
	FROM  `motherboard`
	where motherboard.Код = $check";

	// $sql = "SELECT motherboard.Код, motherboard.Socket 
	// FROM  `motherboard`
	// where motherboard.Код = $check";

	$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));

	$row = mysqli_fetch_row($result);

	$motherboard = new MotherBoard($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9]);

	$components[] = array("mather", $row[2], $_SESSION['MotherBoard'][1], $row[1], $row[0]);

	mysqli_close($link);



}

if (isset($_SESSION['RAM'])) {



}

if (isset($_SESSION['SSD'])) {

	$check = $_SESSION['SSD'][0];
	$link = mysqli_connect($host, $user, $password, $database)
	or die("Ошибка " . mysqli_error($link));

	$sql = "SELECT ssd.Код, ssd.Наименование, ssd.Цена, ssd.Объем_накопителя, ssd.Форм_фактор
	FROM  `ssd`
	where ssd.Код = $check";

	$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
	$row = mysqli_fetch_row($result);

	$ssd = new SSD($row[0], $row[1], $row[2], $row[3], $row[4]);
	$components[] = array("ssd", $row[2], $_SESSION['SSD'][1], $row[1], $row[0]);

	mysqli_close($link);
}

if (isset($_SESSION['HDD'])) {

	$check = $_SESSION['HDD'][0];
	$link = mysqli_connect($host, $user, $password, $database)
	or die("Ошибка " . mysqli_error($link));

	$sql = "SELECT hdd.Код, hdd.Наименование, hdd.Цена, hdd.Объем_накопителя, hdd.Форм_фактор
	FROM  `hdd`
	where hdd.Код = '$check'";

	$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
	$row = mysqli_fetch_row($result);

	$hdd = new HDD($row[0], $row[1], $row[2], $row[3], $row[4]);

	$components[] = array("hdd", $row[2], $_SESSION['HDD'][1], $row[1], $row[0]);

	mysqli_close($link);

}

if (isset($_SESSION['OpticalDrive'])) {



}

if (isset($_SESSION['Acccelerator'])) {



}


if (isset($_SESSION['Case'])) {



}

if (isset($_SESSION['LANcard'])) {



}
echo json_encode($components);


?>