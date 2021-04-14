<?php

// chong ke thua
final class A
{
	// class A khong cho class khac ke thua no
	public function test()
	{
		return 'this is test';
	}
}

/*
class B extends A {

}
$b = new B;
echo $b->test();
*/
// implements

// chong viec override 
class Demo
{
	final public function test()
	{
		return 'this is test';
	}
}

class Demo2 extends Demo 
{
	// trong class nay khong duoc phep override phuong thuc test
	/*
	public function test()
	{
		return 'this is test demo 2';
	}
	*/

	public function test2()
	{
		return $this->test();
	}

}
$d = new Demo2;
echo $d->test2();



