<?php

class JSON extends File implements Serializable
{
	public function serialize() 
	{
		return json_encode($this->data);
	}

	public function unserialize($data)
	{
		$this->data = json_decode($data);
	}
}

