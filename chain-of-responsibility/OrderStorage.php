<?php

class OrderStorage
{
  public $orders;
  private static $instance;

  private function __construct()
  {
    $this->orders = [];
  }

  public static function getInstance()
  {
    if (self::$instance == null) {
      self::$instance = new OrderStorage();
    }

    return self::$instance;
  }

  public function addOrder($order)
  {
    if ($this->orderExists($order->getId())) {
      return false;
    }

    $this->orders[$order->getId()] = $order;
  }

  public function getOrder($id)
  {
    return $this->orders[$id];
  }

  public function orderExists($id)
  {
    return isset($this->orders[$id]);
  }
}
