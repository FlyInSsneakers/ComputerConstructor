<?php

require_once '../class.php';
require_once '../base/connect_base.php';


session_start();


if(isset($_POST["id"])){
	$component = [ "VideoCard", "SSD", "HDD", "MotherBoard", "bp", "cooler", "ram", "cpu", "drive", "case"];
	// $componentChnge = ["VideoCard", "SSD", "HDD", "ram"]


	for ($i=0; $i < count($component); $i++) { 
		if (isset($_SESSION[$component[$i]][0]) and $_SESSION[$component[$i]][0] == $_POST["id"]) {
			if ($_SESSION[$component[$i]][1] == 1 and $_POST["sign"] < 0) {
				unset($_SESSION[$component[$i]]);
			}
			else{
				if ($component[$i] == "VideoCard" or $component[$i]== "SSD" or $component[$i] == "HDD" or $component[$i] =="ram"){
					$_SESSION[$component[$i]][1] = $_SESSION[$component[$i]][1] + $_POST["sign"]; 
				}
				else
					exit();
			} 
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

if (isset($_SESSION['bp'])) {

	$check = $_SESSION['bp'][0];
	$link = mysqli_connect($host, $user, $password, $database)
	or die("Ошибка " . mysqli_error($link));

	$sql = "SELECT bp.Код, bp.Наименование, bp.Цена, bp.Мощность, bp.Питание_материнской_платы_и_процессора, bp.Сертифицирован_в_стандарте, bp.Активный_PFC
	FROM  `bp`
	where bp.Код = $check";

	$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));

	$row = mysqli_fetch_row($result);

	$poverSupply = new PoverSupply($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]);

	$components[] = array("bp", $row[2], $_SESSION['bp'][1], $row[1], $row[0]);

	mysqli_close($link);

}

if (isset($_SESSION['cpu'])) {

	$check = $_SESSION['cpu'][0];
	$link = mysqli_connect($host, $user, $password, $database)
	or die("Ошибка " . mysqli_error($link));

	$sql = "SELECT cpu.Код, cpu.Наименование, cpu.Цена, cpu.Socket, cpu.Тактовая_частота, cpu.Количество_ядер, cpu.Тепловыделение, cpu.Интегрированная_графика
	FROM  `cpu`
	where cpu.Код = $check";

	$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));

	$row = mysqli_fetch_row($result);

	$poverSupply = new PoverSupply($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7]);

	$components[] = array("cpu", $row[2], $_SESSION['cpu'][1], $row[1], $row[0]);

	mysqli_close($link);

}

if (isset($_SESSION['cooler'])) {

	$check = $_SESSION['cooler'][0];
	$link = mysqli_connect($host, $user, $password, $database)
	or die("Ошибка " . mysqli_error($link));

	$sql = "SELECT cool.Код, cool.Наименование, cool.Цена, cool.Скорость_вращения, cool.Размеры_кулера
	FROM  `cool`
	where cool.Код = $check";

	$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));

	$row = mysqli_fetch_row($result);

	$cooler = new Cooler($row[0], $row[1], $row[2], $row[3], $row[4]);

	$components[] = array("cooler", $row[2], $_SESSION['cooler'][1], $row[1], $row[0]);

	mysqli_close($link);

}

if (isset($_SESSION['MotherBoard'])) {



	$check = $_SESSION['MotherBoard'][0];
	$link = mysqli_connect($host, $user, $password, $database)
	or die("Ошибка " . mysqli_error($link));

	$sql = "SELECT motherboard.Код, motherboard.Наименование, motherboard.Цена, 
	motherboard.Socket, motherboard.Форм_фактор, motherboard.Слотов_PCI, motherboard.Разъемов_SATA3, motherboard.Разъемов_M2, motherboard.Кол_во_внешних_USB_2, motherboard.Кол_во_внешних_USB_3_0
	FROM  `motherboard`
	where motherboard.Код = $check";

	$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));

	$row = mysqli_fetch_row($result);

	$motherboard = new MotherBoard($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9]);

	$components[] = array("mather", $row[2], $_SESSION['MotherBoard'][1], $row[1], $row[0]);

	mysqli_close($link);



}

if (isset($_SESSION['ram'])) {

	$check = $_SESSION['ram'][0];
	$link = mysqli_connect($host, $user, $password, $database)
	or die("Ошибка " . mysqli_error($link));

	$sql = "SELECT ram.Код, ram.Наименование, ram.Цена, ram.Объем, ram.Тип_памяти, ram.Частота_базовая
	FROM  `ram`
	where ram.Код = $check";

	$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
	$row = mysqli_fetch_row($result);

	$rAM = new RAM($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
	$components[] = array("ram", $row[2], $_SESSION['ram'][1], $row[1], $row[0]);

	mysqli_close($link);

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
	where hdd.Код = $check";

	$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
	$row = mysqli_fetch_row($result);

	$hdd = new HDD($row[0], $row[1], $row[2], $row[3], $row[4]);

	$components[] = array("hdd", $row[2], $_SESSION['HDD'][1], $row[1], $row[0]);

	mysqli_close($link);

}

if (isset($_SESSION['drive'])) {

	$check = $_SESSION['drive'][0];
	$link = mysqli_connect($host, $user, $password, $database)
	or die("Ошибка " . mysqli_error($link));

	$sql = "SELECT drive.Код, drive.Наименование, drive.Цена
	FROM  `drive`
	where drive.Код = $check";

	$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
	$row = mysqli_fetch_row($result);

	$opticalDrive = new OpticalDrive($row[0], $row[1], $row[2]);

	$components[] = array("drive", $row[2], $_SESSION['drive'][1], $row[1], $row[0]);

	mysqli_close($link);

}


if (isset($_SESSION['case'])) {

	$check = $_SESSION['case'][0];
	$link = mysqli_connect($host, $user, $password, $database)
	or die("Ошибка " . mysqli_error($link));

	$sql = "SELECT casec.Код, casec.Наименование, casec.Цена,  casec.Форм_фактор
	FROM  `casec`
	where casec.Код = $check";

	$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
	$row = mysqli_fetch_row($result);

	$caseComputer = new CaseComputer($row[0], $row[1], $row[2], $row[3]);

	$components[] = array("case", $row[2], $_SESSION['case'][1], $row[1], $row[0]);

	mysqli_close($link);

}


echo json_encode($components);


?>