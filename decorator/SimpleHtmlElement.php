<?php

abstract class SimpleHtmlElement implements HtmlElement, Renderable
{
  /** @var string $tag */
  protected $tag;

  /** @var array $children */
  protected $children;

  /**
   * Constructor of the HtmlElement, initialise with no children
   *
   * @return $this
   */
  public function __construct($tag)
  {
    $this->tag = $tag;
    $this->children = [];
    $this->attributes = [];

    return $this;
  }

  /**
   * Get the total value of this tree
   *
   * @return string
   */
  public function render()
  {
    $result = '<' . $this->getTag() . '>';

    foreach ($this->getChildren() as $child) {
      $result .= $child->render();
    }

    return $result .  '</' . $this->getTag() .'>';
  }

  /**
   * Adds a child to the tree (either another Tree or a Leaf)
   *
   */
  public function add($child)
  {
    $this->children[] = $child;

    return $this;
  }

  /**
   * @return array
   */
  public function getChildren()
  {
    return $this->children;
  }

  /**
   * @return string
   */
  public function getTag()
  {
    return $this->tag;
  }
}
