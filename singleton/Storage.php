<?php 

class Storage implements Singleton
{
	/** @var Storage */
	private static $instance;
	/** @var array */
	private static $storage;

	private function __construct() 
	{
		self::$storage = [];
	}

	public static function getInstance() 
	{
		if (self::$instance == null)
		{
			self::$instance = new Storage();
		}

		return self::$instance;
	}

	public static function get($index) 
	{
		return self::$storage[$index];
	}

	public static function set($index, $value)
	{
		self::$storage[$index] = $value;
	}
}

