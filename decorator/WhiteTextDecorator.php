<?php

class WhiteTextDecorator extends HtmlElementDecorator
{
  public function __construct(HtmlElement $element)
  {
    parent::__construct($element);

    $this->addAttr('style', 'color: white;');
  }
}
