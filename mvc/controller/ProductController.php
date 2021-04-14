<?php
namespace controller;
use model\ProductModel;

class ProductController
{
	private $db;
	public function __construct()
	{
		$this->db = new ProductModel();
	}

	public function index()
	{
		return $this->db->getData();
	}
}