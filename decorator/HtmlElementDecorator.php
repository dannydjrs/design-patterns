<?php

abstract class HtmlElementDecorator implements HtmlElement, Renderable
{
  protected $decoratedHtmlElement;

  /** @var array $attributes */
  protected $attributes;

  public function __construct(HtmlElement $element)
  {
    $this->decoratedHtmlElement = $element;
    $this->attributes = [];
  }

  public function getAttributes()
  {
    if ($this->decoratedHtmlElement instanceof HtmlElementDecorator) {
      return $this->mergeAttributes(
        $this->attributes,
        $this->decoratedHtmlElement->getAttributes()
      );
    }

    return $this->attributes ?? [];
  }

  private function mergeAttributes($att1, $att2)
  {
    $ret = [];

    $keys = array_unique(array_merge(array_keys($att1), array_keys($att2)));

    foreach ($keys as $key) {
      $ret[$key] = '';

      if (isset($att1[$key])) {
        $ret[$key] .= $att1[$key] . ' ';
      }

      if (isset($att2[$key])) {
        $ret[$key] .= $att2[$key] . ' ';
      }
    }

    return $ret;
  }


  protected function addAttr($key, $value)
  {
    if (!isset($this->attributes[$key])) {
      $this->attributes[$key] = $value;
    } else {
      $this->attributes[$key] = $this->attributes[$key] . $value;
    }
  }

  public function getChildren()
  {
    return $this->decoratedHtmlElement->getChildren();
  }

  public function add($child)
  {
    $this->decoratedHtmlElement->add($child);

    return $this;
  }

  public function getTag()
  {
    return $this->decoratedHtmlElement->getTag();
  }

  public function render()
  {
    $result = '<' . $this->decoratedHtmlElement->getTag();

    foreach ($this->getAttributes() as $key => $value) {
      $result .= ' '.  $key . '="' . $value . '"';
    }

    $result .= '>';

    foreach ($this->getChildren() as $child) {
      $result .= $child->render();
    }

    return $result .  '</' . $this->getTag() .'>';
  }
}
