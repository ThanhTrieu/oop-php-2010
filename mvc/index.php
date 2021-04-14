<?php
require 'config/Autoload.php';
use config\Autoload;
$app = new Autoload(); // __construct Autoload se chay

$p = new controller\ProductController();
$data = $p->index();
echo "<pre>";
print_r($data);