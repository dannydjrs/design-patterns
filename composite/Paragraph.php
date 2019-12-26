<?php

class Paragraph extends HtmlElement
{
  /**
   * Get the value of this leaf
   *
   * @return int
   */
  public function render()
  {
    return "<p>" . parent::render() . "</p>";
  }
}
