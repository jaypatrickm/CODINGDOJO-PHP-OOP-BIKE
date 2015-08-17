<?php

class Bike
{
	public $price;
	public $max_speed;
	public $miles;
	
	public function __construct($price, $speed)
	{
		$this->price = $price;
		$this->max_speed = $speed;
		$this->miles = 0;
	}
	public function __get($property)
	{
		if (property_exists($this, $property))
		{
	    	return $this->property;
		}
	}

	public function __set($property, $value) 
	{
		if (property_exists($this, $property)) 
		{
    		$this->$property = $value;
		}
		return $this;
	}

	public function displayInfo()
	{
		echo $this->price . "<br>";
		echo $this->max_speed . "<br>";
		echo $this->miles . "<br>";
	}

	public function drive()
	{
		echo "Driving" . "<br>";
		$this->miles += 10;
	}

	public function reverse()
	{
		echo "Reversing" . "<br>";
		//Prevent Negative Value: 
		//Added statement if below or equal to 0 , miles will be 0 
		if ($this->miles <= 0){
			$this->miles == 0;
		} else {
			$this->miles -= 5;
		}

	}
}

$bike1 = new Bike(200,"25mph");
$bike2 = new Bike(350,"35mph");
$bike3 = new Bike(600,"50mph");

$bike1->drive();
$bike1->drive();
$bike1->drive();
$bike1->reverse();
$bike1->displayInfo();

$bike2->drive();
$bike2->drive();
$bike2->reverse();
$bike2->reverse();
$bike2->displayInfo();

$bike3->reverse();
$bike3->reverse();
$bike3->reverse();
$bike3->displayInfo();
?>