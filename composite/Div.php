<?php

class Div extends HtmlElement
{
  /**
   * Get the value of this leaf
   *
   * @return int
   */
  public function render()
  {
    return "<div>" . parent::render() . "</div>";
  }
}
