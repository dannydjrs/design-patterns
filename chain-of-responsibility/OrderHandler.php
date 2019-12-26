<?php

class OrderHandler extends BaseHandler
{
  protected function canHandle($request)
  {
    if (!isset($request['order_id'])) {
      return false;
    }

    $storage = OrderStorage::getInstance();

    if ($storage->orderExists($request['order_id'])) {
      return false;
    }

    return true;
  }

  public function handle($request)
  {
    if (!$this->canHandle($request)) {
      throw new Exception("Cannot handle order. Order ID already used or not provided");
    }

    $storage = OrderStorage::getInstance();
    $storage->addOrder(new Order($request['order_id']));

    parent::handle($request);
  }
}
