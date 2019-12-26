<?php

class HtmlElement implements Renderable
{
  /** @var array $children */
  private $children;

  /**
   * Constructor of the HtmlElement, initialise with no children
   *
   * @return $this
   */
  public function __construct()
  {
    $this->children = [];

    return $this;
  }

  /**
   * Adds a child to the tree (either another Tree or a Leaf)
   *
   * @param Renderable $child
   */
  public function add(Renderable $child)
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
   * Get the total value of this tree
   *
   * @return string
   */
  public function render()
  {
    $result = '';

    foreach ($this->getChildren() as $child) {
      $result .= $child->render();
    }

    return $result;
  }
}
