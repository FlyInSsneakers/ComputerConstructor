<?php

class component 
{
	public $id, $name, $price;
	
	function __construct($id, $name, $price)
	{
		$this->id = $id;
		$this->name = $name;
		$this->price = $price;
	}
}

class PoverSupply extends component
{
	public $power, $ports, //какие и сколько (массив)
	$certificate, 
	$pfc; // регулировка вращения вентилятора
	
	function __construct($id, $name, $price, $power, $ports, $certificate, 	$pfc)
	{
		parent::__construct($id, $name, $price);
		$this->power = $power;
		$this->certificate = $certificate;
		$this->price = $price;
		$this->pfc = $pfc;
	}
}

class CPU extends component
{
	
	public $socet, $frequency, $numberOfCores, 	
	$numberOfThreads, //количество потоков
	$tdp,// тепловыделение
	$graphicsCore,
	$compatibility; // совместимость

	function __construct($id, $name, $price, $socet, $frequency, $numberOfCores, 	
		$numberOfThreads, $tdp,	$graphicsCore, $compatibility)
	{
		parent::__construct($id, $name, $price);
		$this->socet = $socet;
		$this->frequency = $frequency;
		$this->numberOfCores = $numberOfCores;
		$this->numberOfThreads = $numberOfThreads;
		$this->tdp = $tdp;
		$this->graphicsCore = $graphicsCore;
		$this->compatibility = $compatibility;
	}
}

class Cooler extends component
{

	public $tdp, //теплогашение 
	$mooveSpeed, //скорость вращеня
	$compatibility, // совместимость
	$hight; //высота

	function __construct($id, $name, $price, $tdp,
		$mooveSpeed, $compatibility, $hight)
	{
		parent::__construct($id, $name, $price);
		$this->tdp = $tdp;
		$this->mooveSpeed = $mooveSpeed;
		$this->graphicsCore = $graphicsCore;
		$this->compatibility = $compatibility;
	}
}

class MotherBoard extends component
{
	public $socet,
	$formFactor,
	$PCI, //сколько и какие (массив)
	$sata,
	$M2, //порт под встроенный SSD
	// $compatibility, //совместимость
	// $DDR,   верни потом
	$usb, 
	$usb3;

	function __construct($id, $name, $price, $socet, $formFactor, $PCI, 
		$sata,$M2, $usb, $usb3)
	{
		parent::__construct($id, $name, $price);
		$this->socet = $socet;
		$this->formFactor = $formFactor;
		$this->PCI = $PCI;
		$this->sata = $sata;
		$this->M2 = $M2;
		// $this->compatibility = $compatibility;

		// $this->DDR = $DDR;
		$this->usb = $usb;
		$this->usb3 = $usb3;
	}
}

class RAM extends component
{
	public $size, $ddr, $frequency, $acceleration;


	function __construct($id, $name, $price, $size, $ddr, $frequency, $acceleration)
	{
		parent::__construct($id, $name, $price);
		$this->size = $size;
		$this->ddr = $ddr;
		$this->frequency = $frequency;
		$this->acceleration = $acceleration;
	}
}

class HDD extends component
{
	public $size, $formFactor; //внешний или внутренний

	function __construct($id, $name, $price, $size, $formFactor)
	{
		parent::__construct($id, $name, $price);
		$this->size = $size;
		$this->formFactor = $formFactor;
		// $this->place = $place;
	}
}

class SSD extends component
{
	public $size, $formFactor, $place; //внешний или внутренний

	function __construct($id, $name, $price, $size, $formFactor)
	{
		parent::__construct($id, $name, $price);
		$this->size = $size;
		$this->formFactor = $formFactor;
		// $this->place = $place;
	}
}

class OpticalDrive extends component
{
	public $formFactor,	$place; //внешний или внутренний

	function __construct($id, $name, $price, $formFactor, $place)
	{
		parent::__construct($id, $name, $price);
		$this->formFactor = $formFactor;
		$this->place = $place;
	}
}

class VideoCard extends component
{
	public $size, $frequency, $supply, // порт питания
	$port; //порт подключения
	// $lenght; //длинна видеокарты


	function __construct($id, $name, $price, $size, $frequency, $supply, $port)
	{
		parent::__construct($id, $name, $price);
		$this->size = $size;
		$this->frequency = $frequency;
		$this->supply = $supply;
		$this->port = $port;
		// $this->lenght = $lenght;
	}
}

class Acccelerator extends component
{
	public $size, $frequency, $supply, // порт питания
	$port, //порт подключения
	$lenght; //длинна видеокарты
	function __construct($id, $name, $price, $size, $frequency, $supply, $port, $lenght)
	{
		parent::__construct($id, $name, $price);
		$this->size = $size;
		$this->frequency = $frequency;
		$this->supply = $supply;
		$this->port = $port;
		$this->lenght = $lenght;
	}
}

class CaseComputer	 extends component
{
	public $formFactor,	$usb, $usb3,
	$externalPorts, //какие и сколько (массив)
	$internalPorts;//какие и сколько (массив)

	function __construct($id, $name, $price, $formFactor,
		$usb, $usb3,$externalPorts, $internalPorts)
	{
		parent::__construct($id, $name, $price);
		$this->formFactor = $formFactor;
		$this->usb = $usb;
		$this->usb3 = $usb3;
		$this->externalPorts = $externalPorts;
		$this->internalPorts = $internalPorts;
	}
}

class LANcard extends component
{
	public $port, $speed;
	function __construct($id, $name, $price, $port, $speed)
	{
		parent::__construct($id, $name, $price);
		$this->port = $port;
		$this->speed = $speed;
	}
}

class Computer
{
	public $PoverSupply, $CPU, $Cooler, $MotherBoard,
	$RAM, $HDD, $SSD, $OpticalDrive,
	$VideoCard, $Acccelerator, $Case, $LANcard;

	function __construct($PoverSupply, $CPU, $Cooler, $MotherBoard,
		$RAM, $HDD, $SSD, $OpticalDrive, 
		$VideoCard, $Acccelerator, $Case, $LANcard)
	{
		$this->PoverSupply = $PoverSupply;
		$this->CPU = $CPU;
		$this->Cooler = $Cooler;
		$this->MotherBoard = $MotherBoard;
		$this->RAM = $RAM;
		$this->HDD = $HDD;
		$this->SSD = $SSD;
		$this->OpticalDrive = $OpticalDrive;
		$this->VideoCard = $VideoCard;
		$this->Acccelerator = $Acccelerator;
		$this->Case = $Case;
		$this->LANcard = $LANcard;
	}


}

?>