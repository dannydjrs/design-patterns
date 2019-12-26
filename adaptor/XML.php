<?php

class XML extends File implements Serializable
{
	public function serialize() 
	{
		$xml = new SimpleXMLElement('<object></object>');
   		array_walk_recursive($this->data, [$xml,'addChild']);
   		return $xml->asXML();
	}

	public function unserialize($data)
	{
		$this->data = simplexml_load_string($data);
	}
}

