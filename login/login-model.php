<?php
require 'database.php';

class LoginModel extends Database
{
	public function __construct()
	{
		parent::__construct();
	}

	private function checkConnection()
	{
		if($this->db){
			return true;
		}
		return false;
	}

	public function checkUserLogin($user, $pass)
	{
		$info = [];
		if($this->checkConnection()){
			if($user === 'admin' && $pass === '123'){
				return $info = [
					'id' => 1,
					'username' => 'admin',
					'email' => 'admin@example.com',
				];
			}
		}
		return $info;
	}
}