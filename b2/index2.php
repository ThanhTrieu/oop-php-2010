<?php
interface C 
{
	public function testv1();
}
// $c = new C; //sai

// interface ke thua interface
interface A extends C
{
	// ko dc dinh nghia thuoc tinh
	// chi dinh nghia phuong thuc va o pham vi public
	// cac phuong thuc do chi la cac phuong thuc rong
	public function test();
	public function demo();
}

class B implements A
{
	// class B ke thua interface A
	// bat buoc class B phai override toan bo cac phuong thuc cua interface A
	
	public function test()
	{

	}

	public function demo()
	{
		echo 'demo';
	}

	public function testv1()
	{

	}
}

class D extends B
{

}

$b = new B;
$b->demo();


