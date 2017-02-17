<?php

class Worker 
{

	public $name = 'ВАСЯ';
	public $age = 10;
	public $salary = 1000;

 	public function __construct()
 	{
 		return $this->name."<br/>".$this->age." років<br/>".$this->salary." $<br/>";
 	}

 	public function __construct($newName,$newAge,$newSalary)
 	{
 		$this->name = $newName;
 		$this->age = $newAge;
 		$this->salary = $newSalary;
 	}

}

// $new_object_Worker = new Worker("ВАСЯ",10,1000);
// $new_object_Worker_2 = new Worker("ІВАН",30,2000);

echo $new_object_Worker->get() . "<br/>";

// $new_object_Worker_2->set("ІВАН",30,2000) . "<br/>";

echo $new_object_Worker_2->get() . "<br/>";

echo "загальний вік " . ($new_object_Worker->age + $new_object_Worker_2->age) . "<br/>";
echo "загальна з/п " . ($new_object_Worker->salary + $new_object_Worker_2->salary . " $");

?>