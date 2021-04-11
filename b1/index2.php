<?php

class Animals
{
	public $name = 'Tom';
	protected $color = 'black';

	public function goToSleep()
	{
		return $this->name;
	}
}

// trait : ho tro cho viec da ke thua

class Cats extends Animals
{
	public $name = 'Tom 2';
	public function getColor()
	{
		return $this->color;
	}

	public function goToSleep()
	{
		return $this->name;
	}

	public function wakeup()
	{
		// se goi phuong cua class cha hay class con ?
		return parent::goToSleep();
	}
}
$tom = new Cats;
echo $tom->wakeup();

