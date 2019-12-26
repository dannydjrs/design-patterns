<?php

class XMLAdaptor extends JSON implements Serializable
{
	public function __construct(XML $xml)
	{
		$this->data = $xml->data;
	}
}

