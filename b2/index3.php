<?php
// abstract class

abstract class C 
{
	public function demov2()
	{

	}
}

abstract class A extends C
{
	// duoc phep dinh nghia thuoc tinh
	public $name = 'Teo';
	protected $age = 20;
	private $money = 1000;
	// duoc phep dinh nghia phuong thuc
	
	// phuong thuc abstract - phuong thuc rong
	// chi dc phep la public hoac protected
	abstract public function test();
	abstract protected function demo();

	public function getName()
	{
		return $this->name;
	}
	protected function getAge()
	{
		return $this->age;
	}
}


class B extends A
{
	// class B ke thua abstract class A
	// class B phai override lai toan bo cac phuong thuc abstract cua abstract class A
	public function test()
	{
		return $this->name;
	}

	public function demo()
	{
		return $this->age;
	}

	// public function demov2()
	// {

	// }
}
$b = new B;
echo $b->demo();



