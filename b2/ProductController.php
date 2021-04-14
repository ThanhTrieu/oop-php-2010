<?php
namespace b2\ProductController;
require 'HomeController.php';

use b2\HomeController\HomeController as Home;

class ProductController extends Home
{

}
$pd = new ProductController;
echo $pd->getName();