<!-- Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата) и следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.
Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.
Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.
Дополните класс Worker из предыдущей задачи private методом checkAge, который будет проверять возраст на корректность (от 1 до 100 лет). Этот метод должен использовать метод setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться). -->
<?php
error_reporting(-1);
class Worker
{
	private $name;
	private $age;
	private $salary;

	public function setName ($name) 
	{
		$this->name = $name;
	}

	public function getName () 
	{
		return $this->name;
	}

	public function setAge ($age) 
	{
		if ($this->checkAge($age)) {
				$this->age = $age;
			}
	}

	public function getAge () 
	{
		return $this->age;
	}

	private function checkAge($age)
		{
			if ($age < 100) {
				return true;
			} else {
				echo "bad age<br>";
			}
		}

	public function setSalary ($salary) 
	{
		$this->salary = $salary;
	}

	public function getsalary () 
	{
		return $this->salary;
	}
}

$worker1 = new Worker();
$worker2 = new Worker();

$worker1->setName('ivan');
$worker2->setName('vasa');

$worker1->setAge(225);
$worker2->setAge(126);

$worker1->setSalary(1000);
$worker2->setSalary(2000);

echo "total salary = ".($worker1->getSalary()+$worker2->getSalary())."<br>";
echo "total age = ".($worker1->getAge()+$worker2->getAge());
?>