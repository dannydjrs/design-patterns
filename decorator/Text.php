<?php

class Text implements Renderable
{
  /** @var string %text */
  private $text;

  /**
   * Constructor of the text class. Only with text.
   *
   * @return $this
   */
  public function __construct($text)
  {
    $this->text = $text;
    return $this;
  }

  /**
   * Get the value of this leaf
   *
   * @return int
   */
  public function render()
  {
    return $this->text;
  }
}
