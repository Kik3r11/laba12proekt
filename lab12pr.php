<?php
interface Tovar
{
	function name();
	function price();
	function rating();
}
class Table implements Tovar
{
	public $name, $price, $rating;
	function __construct($name, $price, $rating)
	{
		$this->name = $name;
		$this->price = $price;
		$this->rating = $rating;
	}
	function name()
	{
		echo "Предмет: ".$this->name."<br>";
	}
	function price()
	{
		echo "Цена: ".$this->price."<br>";
	}
	function rating()
	{
		echo "Рейтинг: ".$this->rating;
	}
}
class Chair implements Tovar
{
	public $name, $price, $rating;
	function __construct($name, $price, $rating)
	{
		$this->name = $name;
		$this->price = $price;
		$this->rating = $rating;
	}
	function name()
	{
		echo "<br>"."Предмет: ".$this->name."<br>";
	}
	function price()
	{
		echo "Цена: ".$this->price."<br>";
	}
	function rating()
	{
		echo "Рейтинг: ".$this->rating;
	}
}
class Camera implements Tovar
{
	public $name, $price, $rating;
	function __construct($name, $price, $rating)
	{
		$this->name = $name;
		$this->price = $price;
		$this->rating = $rating;
	}
	function name()
	{
		echo "<br>"."Предмет: ".$this->name."<br>";
	}
	function price()
	{
		echo "Цена: ".$this->price."<br>";
	}
	function rating()
	{
		echo "Рейтинг: ".$this->rating;
	}
}
interface Person
{
	function login();
	function password();
}
class User implements Person
{
	public $login, $password;
	function __construct($login, $password)
	{
		$this->login = $login;
		$this->password = $password;
	}
	function login()
	{
		echo "<br>"."Логин пользователя: ".$this->login;
	}
	function password()
	{
		echo "<br>"."Пароль: ".$this->password;
	}
}
class BuyTovar implements Tovar, Person 
{
	public $name, $price, $rating, $login, $password;
	function __construct($name, $price, $rating, $login, $password)
	{
		$this->name = $name;
		$this->price = $price;
		$this->rating = $rating;
		$this->login = $login;
		$this->password = $password;
	}
		function login()
		{
			echo "<br>"."Логин покупателя: ".$this->login;
		}
		function password()
		{
			echo "<br>"."Пароль покупателя: ".$this->password;
		}
		function name()
		{
			echo "<br>"."Предмет покупки: ".$this->name."<br>";
		}
		function price()
		{
			echo "Цена предмета: ".$this->price."<br>";
		}
		function rating()
		{
			echo "Рейтинг предмета: ".$this->rating;
		}	
}
$table = new Table("Стол", "1000 руб.", "4.5");
$table->name();
$table->price();
$table->rating();
$chair = new Chair("Стул", "500 руб.", "5.0");
$chair->name();
$chair->price();
$chair->rating();
$camera = new Camera("Камера", "5000 руб.", "4.9");
$camera->name();
$camera->price();
$camera->rating();
$user = new User("Admin", "12345");
$user->login();
$user->password();
$t = new BuyTovar("Камера", "5000 руб.", "4.9", "Admin", "12345");
$t->login();
$t->password();
$t->name();
$t->price();
$t->rating();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

</body>
</html>