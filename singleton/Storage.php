<?php

class Storage implements Singleton
{
	/** @var Storage */
	private static $instance;
	/** @var array */
	private $storage;

	private function __construct()
	{
		$this->storage = [];
	}

	public static function getInstance()
	{
		if (self::$instance == null)
		{
			self::$instance = new Storage();
		}

		return self::$instance;
	}

	public function get($index)
	{
		return $this->storage[$index];
	}

	public function set($index, $value)
	{
		$this->storage[$index] = $value;
	}
}
