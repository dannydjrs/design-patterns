<?php 

class File
{
	protected $data;

	public function __construct()
	{
		$this->data = [
			'test' => [
				'value' => 'one',
			],
		];
	}
}
