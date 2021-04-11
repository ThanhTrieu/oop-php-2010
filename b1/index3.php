<?php 

class User 
{
	public $fullName = 'Van Teo';
	public $username;
	public $email;

	public function __construct($user = '', $email = '')
	{
		$this->username = $user;
		$this->email = $email;
		// magic method -- luon luon co 2 dau gach duoi lien nhau dung dang truoc ten ham
		// phuong thuc khoi tao
		// phuong thuc nay se tu dong chay dau tien trong class khi goi class ra su dung (khoi tao doi tuong cho class do)
		// __FUNCTION__ : lay ra ten phuong thuc dang lam viec
		echo "phuong thuc " . __FUNCTION__ . ' vua chay';
		echo "<br/>";
	}

	public function getName()
	{
		return $this->username;
	}

	public function __destruct()
	{
		// ham huy
		// ham nay se luon luon tu dong chay cuoi cung trong class
		echo "<br/>";
		echo "phuong thuc " . __FUNCTION__ . ' vua chay';
		
	}

	public function __call($req, $res)
	{
		echo "<br/>";
		print_r($req);
		echo "<br/>";
		print_r($res);
		echo "<br/>";
		echo "Ban vua truy cap vao phuong thuc ko ton tai trong class";
		echo "<br/>";
	}

	public static function __callStatic($method, $params)
	{
		echo "<br/>";
		print_r($method);
		echo "<br/>";
		print_r($params);
		echo "<br/>";
		echo "<br/>";
		echo "Ban vua truy cap vao phuong thuc static ko ton tai trong class";
		echo "<br/>";
	}

	public function __get($nameProperty)
	{
		echo "<br/>";
		echo "Ban vua truy cap vao thuoc tinh " . $nameProperty . " khong ton tai trong class";
		echo "<br/>";
	}

	public function __set($name, $value)
	{
		echo "<br/>";
		echo "Ban vua truy cap vao thuoc tinh " . $name . " khong ton tai trong class va ban da gan tri " . $value . " cho thuoc tinh do";
		echo "<br/>";
	}
}
$user = new User('admin', 'admin@gmail.com'); // phuong thuc __construct se chay
// echo $user->getName();
echo $user->getEmail('teo',10);
echo User::getAddress('Ha Noi');
$user->address = 'Ha Noi';


