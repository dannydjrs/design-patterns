<?php

interface Handler
{
  public function setNext(Handler $h);
  public function handle($request);
}
