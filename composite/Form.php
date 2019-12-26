<?php

class Form extends HtmlElement
{
  /**
   * Get the value of this leaf
   *
   * @return int
   */
  public function render()
  {
    return "<form>" . parent::render() . "</form>";
  }
}
