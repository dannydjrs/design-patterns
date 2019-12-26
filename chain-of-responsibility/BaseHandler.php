<?php

class BaseHandler implements Handler
{
  private $next;

  public function __construct()
  {
    $this->next = null;
  }

  public function setNext(Handler $next)
  {
    $this->next = $next;
  }

  public function handle($request)
  {
    if ($this->next != null) {
      $this->next->handle($request);
    }
  }
}
