<?php

class RedBackgroundDecorator extends HtmlElementDecorator
{
  public function __construct(HtmlElement $element)
  {
    parent::__construct($element);

    $this->addAttr('style', 'background: red;');
  }
}
