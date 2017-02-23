<!-- Написать класс Cat, который наследуется от класcа Animal. Класс Animal имеет метод getName (name можно передать в конструктор). Класс Cat имеет метод meow (возвращает строку «Cat {catname} is sayig meow».
Пример использования:
$cat = new Cat ('garfield');
$cat->getName () === 'garfield' // true;
$cat->meow () === 'Cat garfield is saying meow' // true; -->
<?php
error_reporting(-1);

class Animal
{
	//створюється змінна
	protected $name;
	//під час створення нового об'єкту буде встановлене ім'я('ім'я')
	public function __construct($name)
	{
		$this->name = $name;
	}
	//повертає присвоєне ім'я
	public function getName ()
	{
		return $this->name;
	}
}

class Cat extends Animal
{
	//виводить повідомлення
	//$this->getName() звертається до методу, який повертає ім'я
	public function meow ()
	{
		return ("Cat {$this->name} is saying meow"); 
	}
}

$cat = new Cat('garfield');
echo $cat->meow();

?>