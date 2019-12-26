<?php

class LargeFontDecorator extends HtmlElementDecorator
{
  public function __construct(HtmlElement $element)
  {
    parent::__construct($element);

    $this->addAttr('style', 'font-size: 20px;');
    $this->addAttr('style', 'font-weight: bold;');
  }
}
