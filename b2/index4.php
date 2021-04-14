<?php
// trait
trait Dog 
{
	public function sleep()
	{
		echo 'sleep - Dog';
	}

	public function eat()
	{
		echo 'eat - Dog';
	}
}

trait Cat
{
	public function sleep()
	{
		echo 'sleep - Cat';
	}

	public function eat()
	{
		echo 'eat - Cat';
	}
}

class Pet
{
	use Dog,Cat {
		Cat::eat insteadof Dog;
		// goi eat cua Cat
		Cat::sleep insteadof Dog;
		// goi sleep cua Cat
		Dog::sleep as sleeps;
		// van dc phep goi seelp cua Dog ra nhung doi ten no di
	}
	// dc phep su dung nhung gi ma trait Dog va Cat cho phep o ben tren
}
$pet = new Pet;
$pet->eat();
echo "<br/>";
$pet->sleeps();




