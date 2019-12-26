<?php

interface HtmlElement
{
  public function getChildren();

  public function add($child);

  public function getTag();
}
