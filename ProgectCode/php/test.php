<?php
require_once 'function/blok_box.php';
require_once 'base/connect_base.php';

function addFilterCondition($where, $add, $and = true) {
	if ($where) {
		if ($and) $where .= " AND $add";
		else $where .= " OR $add";
	}
	else $where .=$add;
	return $where;
}


function addFiterBlock($where, $add){

	if ($where) $where .= "AND (".$add.")";
	else $where = "(".$add.")";
	return $where;
}


if (isset($_POST['but'])) {
	echo "втф";
	echo $_POST['but'];
}

if (isset($_POST['type_component'])) {


	if ($_POST['type_component']=='gc')	{

		$link = mysqli_connect($host, $user, $password, $database)
		or die("Ошибка " . mysqli_error($link));

		$where ="";

		if (!empty($_POST['producer_gc'])) {
			$whereBlock = "";			
			$producer = $_POST['producer_gc'];
			$n = count($producer);
			for ($i=0; $i < $n ; $i++) { 
				$whereBlock = addFilterCondition($whereBlock, "graphics_card.Производитель = '$producer[$i]'", false);
			}	
			$where = addFiterBlock($where, $whereBlock);
		}

		$price = $_POST["price0"];
		$whereBlock = "";
		$whereBlock = addFilterCondition($whereBlock, "graphics_card.Цена >= '$price'");
		$price = $_POST["price1"];
		$whereBlock = addFilterCondition($whereBlock, "graphics_card.Цена <= '$price'");
		$where = addFiterBlock($where, $whereBlock);

		$sql = "SELECT graphics_card.Наименование, graphics_card.Картинка, graphics_card.Цена, graphics_card.Код, graphics_card.Группа
		FROM  `graphics_card`";

		if ($where) $sql .= " WHERE $where";

	}

	if ( $_POST['type_component']=='cpu'){

		$link = mysqli_connect($host, $user, $password, $database)
		or die("Ошибка " . mysqli_error($link));

		$where ="";

		$price = $_POST["price0"];
		$whereBlock = "";
		$whereBlock = addFilterCondition($whereBlock, "cpu.Цена >= '$price'");
		$price = $_POST["price1"];
		$whereBlock = addFilterCondition($whereBlock, "cpu.Цена <= '$price'");
		$where = addFiterBlock($where, $whereBlock);

		$sql = "SELECT cpu.Наименование, cpu.Картинка, cpu.Цена, cpu.Код, cpu.Группа
		FROM  `cpu`";

		if ($where) $sql .= " WHERE $where";
	}


	if ( $_POST['type_component']=='cool'){

		$link = mysqli_connect($host, $user, $password, $database)
		or die("Ошибка " . mysqli_error($link));

		$where ="";

		$price = $_POST["price0"];
		$whereBlock = "";
		$whereBlock = addFilterCondition($whereBlock, "cool.Цена >= '$price'");
		$price = $_POST["price1"];
		$whereBlock = addFilterCondition($whereBlock, "cool.Цена <= '$price'");
		$where = addFiterBlock($where, $whereBlock);

		$sql = "SELECT cool.Наименование, cool.Картинка, cool.Цена, cool.Код, cool.Группа
		FROM  `cool`";

		if ($where) $sql .= " WHERE $where";
	}


	if ( $_POST['type_component']=='ram'){

		$link = mysqli_connect($host, $user, $password, $database)
		or die("Ошибка " . mysqli_error($link));

		$where ="";

		$price = $_POST["price0"];
		$whereBlock = "";
		$whereBlock = addFilterCondition($whereBlock, "ram.Цена >= '$price'");
		$price = $_POST["price1"];
		$whereBlock = addFilterCondition($whereBlock, "ram.Цена <= '$price'");
		$where = addFiterBlock($where, $whereBlock);

		$sql = "SELECT ram.Наименование, ram.Картинка, ram.Цена, ram.Код, ram.Группа
		FROM  `ram`";

		if ($where) $sql .= " WHERE $where";
	}

	if ( $_POST['type_component']=='bp'){

		$link = mysqli_connect($host, $user, $password, $database)
		or die("Ошибка " . mysqli_error($link));

		$where ="";

		$price = $_POST["price0"];
		$whereBlock = "";
		$whereBlock = addFilterCondition($whereBlock, "bp.Цена >= '$price'");
		$price = $_POST["price1"];
		$whereBlock = addFilterCondition($whereBlock, "bp.Цена <= '$price'");
		$where = addFiterBlock($where, $whereBlock);

		$sql = "SELECT bp.Наименование, bp.Картинка, bp.Цена, bp.Код, bp.Группа
		FROM  `bp`";

		if ($where) $sql .= " WHERE $where";
	}

	if ( $_POST['type_component']=='drive'){

		$link = mysqli_connect($host, $user, $password, $database)
		or die("Ошибка " . mysqli_error($link));

		$where ="";

		$price = $_POST["price0"];
		$whereBlock = "";
		$whereBlock = addFilterCondition($whereBlock, "drive.Цена >= '$price'");
		$price = $_POST["price1"];
		$whereBlock = addFilterCondition($whereBlock, "drive.Цена <= '$price'");
		$where = addFiterBlock($where, $whereBlock);

		$sql = "SELECT drive.Наименование, drive.Картинка, drive.Цена, drive.Код, drive.Группа
		FROM  `drive`";

		if ($where) $sql .= " WHERE $where";
	}

	if ( $_POST['type_component']=='casec'){

		$link = mysqli_connect($host, $user, $password, $database)
		or die("Ошибка " . mysqli_error($link));

		$where ="";

		$price = $_POST["price0"];
		$whereBlock = "";
		$whereBlock = addFilterCondition($whereBlock, "casec.Цена >= '$price'");
		$price = $_POST["price1"];
		$whereBlock = addFilterCondition($whereBlock, "casec.Цена <= '$price'");
		$where = addFiterBlock($where, $whereBlock);

		$sql = "SELECT casec.Наименование, casec.Картинка, casec.Цена, casec.Код, casec.Группа
		FROM  `casec`";

		if ($where) $sql .= " WHERE $where";
	}

	if ( $_POST['type_component']=='ssd'){

		$link = mysqli_connect($host, $user, $password, $database)
		or die("Ошибка " . mysqli_error($link));

		$where ="";

		$price = $_POST["price0"];
		$whereBlock = "";
		$whereBlock = addFilterCondition($whereBlock, "ssd.Цена >= '$price'");
		$price = $_POST["price1"];
		$whereBlock = addFilterCondition($whereBlock, "ssd.Цена <= '$price'");
		$where = addFiterBlock($where, $whereBlock);

		$sql = "SELECT ssd.Наименование, ssd.Картинка, ssd.Цена, ssd.Код, ssd.Группа
		FROM  `ssd`";

		if ($where) $sql .= " WHERE $where";

	}

	if ( $_POST['type_component']=='hdd'){

		$link = mysqli_connect($host, $user, $password, $database)
		or die("Ошибка " . mysqli_error($link));

		$where ="";

		$price = $_POST["price0"];
		$whereBlock = "";
		$whereBlock = addFilterCondition($whereBlock, "hdd.Цена >= '$price'");
		$price = $_POST["price1"];
		$whereBlock = addFilterCondition($whereBlock, "hdd.Цена <= '$price'");
		$where = addFiterBlock($where, $whereBlock);

		$sql = "SELECT hdd.Наименование, hdd.Картинка, hdd.Цена, hdd.Код, hdd.Группа
		FROM  `hdd`";

		if ($where) $sql .= " WHERE $where";

	}

	if(  $_POST['type_component']=='mat') {

		$link = mysqli_connect($host, $user, $password, $database)
		or die("Ошибка " . mysqli_error($link));

		$where ="";

		$price = $_POST["price0"];
		$whereBlock = "";
		$whereBlock = addFilterCondition($whereBlock, "motherboard.Цена >= '$price'");
		$price = $_POST["price1"];
		$whereBlock = addFilterCondition($whereBlock, "motherboard.Цена <= '$price'");
		$where = addFiterBlock($where, $whereBlock);

		$sql = "SELECT motherboard.Наименование, motherboard.Картинка, motherboard.Цена, motherboard.Код, motherboard.Группа
		FROM  `motherboard`";

		if ($where) $sql .= " WHERE $where";	
	}
}

if(!empty($sql)){

	$column = 10;
	if(isset($_POST['current_page']) and $_POST['current_page'] <= $_POST['last_page']){
		$current_page = $_POST['current_page'];
		$skipping_lines = $column * ($current_page-1);
		$sql .= " LIMIT $skipping_lines, 10";
	}
	elseif (!isset($_POST['current_page']))
		$current_page = 1;

	$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
	$rows = mysqli_num_rows($result);
	
	if(isset($_POST['last_page']))
		$total_pages = $_POST['last_page'];
	else
		$total_pages = ceil($rows/$column);

	if ($rows < $column) {
		$column = $rows;	
	}

	$block_res = array();

	$block_res[] = array($current_page, $total_pages);
	if ($rows != 0){
		for ($i=0; $i < $column; $i++) {
			$row = mysqli_fetch_row($result);
			$name = implode(' ',explode("/", $row[0])); 
			$block_res[] = 	array($name, $row[1], $row[2], $row[3], $row[4]);
		}	
	}

	echo json_encode($block_res);

	mysqli_close($link);

}

?>