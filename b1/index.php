<?php
// dinh nghia class trong php
class Student
{
	// dinh nghia hang so
	const PI = 3.14;

	// dinh nghia thuoc cua class
	public $name = 'Van Teo';
	// public: co the su dung o bat ky noi dau
	protected $phone = '31232343';
	// protected: chi su dung noi bo trong class va nhung class ke thua
	private $money = '122323';

	// khai bao thuoc tinh voi tu khoa static
	public static $age = 20;

	// khai bao phuong thuc
	public function goToSchool()
	{
		// phuong nay co the su dung o bat ky noi dau - vi no la public
		
		//var_dump($this);
		//echo "<br/>";
		return 'C3 Ngo Quyen - ' . $this->money;
	}

	protected function diVoiNguoiYeu()
	{
		// phuong thuc nay chi su dung noi bo trong class va nhung lop ke thua - vi no la protected
		return 'No No';
	}

	private function dangKyHocPhan()
	{
		// phuong thuc nay chi su dung noi bo trong class - vi no la private
		return 'Hoc php';
	}

	// khai bao phuong voi tu khoa static
	public static function eating() 
	{
		//$ob = new Student;
		return 'cake - ' . (new Student)->money; //$ob->money;
	}

	public function getAge()
	{
		//return Student::$age;
		return self::$age . self::PI;
	}
}
// khoi tao doi tuong cho class
$svCK = new Student;
$svIT = new Student;

echo $svCK->getAge();

// truy vap vao thuoc tinh hay phuong thuc trong class
$name = $svIT->name;
//echo $name;
// $phone = $svCK->phone; // sai
// echo $phone;

$school = $svCK->goToSchool();
//echo $school;
// $age = $svCK->age; // sai

$age = Student::$age;
//echo $age;
echo Student::eating();





