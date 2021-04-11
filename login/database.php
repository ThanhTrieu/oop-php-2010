<?php
// tao class ket noi toi csdl

class Database 
{
	protected $db;

	public function __construct()
	{
		// ket noi thanh cong toi db
		$this->db = true;
	}

	public function __destruct()
	{
		$this->db = false;
	}
}