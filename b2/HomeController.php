<?php
namespace b2\HomeController;

class HomeController
{
	public $name = 'Teo';

	public function getName()
	{
		return $this->name .  __NAMESPACE__;
	}
}