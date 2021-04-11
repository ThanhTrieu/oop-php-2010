<?php
require "login-model.php";

class HandleLogin {
	private $user;
	private $pass;
	private $loginModel;

	public function __construct()
	{
		$this->loginModel = new LoginModel();
	}

	public function login()
	{
		if(isset($_POST['login'])){
			$this->user = $_POST['username'] ?? '';
			$this->pass = $_POST['password'] ?? '';

			$info = $this->loginModel->checkUserLogin($this->user, $this->pass);

			if(!empty($info)){
				header('Location:home.php');
			} else {
				header('Location:index.php?state=error');
			}
		}
	}
}
$login = new HandleLogin();
$login->login();
