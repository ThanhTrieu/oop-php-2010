<?php
namespace config;

class Autoload
{
	public function __construct()
	{
		spl_autoload_register([$this, '_myLoadFile']);
	}

	private function _myLoadFile($file)
	{
		// file can nap(load) : $file
		// can tuan thu theo nguyen tac : ten file va ten class giong nhau (lazy loading)
		$file = str_replace('\\','/', trim($file, '\\')) . '.php';
		if(file_exists($file)){
			require_once($file);
		}
	}
}