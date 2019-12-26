<?php

class ProductHandler extends BaseHandler
{
  protected function canHandle($request)
  {
    return isset($request['product']);
  }

  public function handle($request)
  {
    if (!$this->canHandle($request)) {
      parent::handle($request);
      return;
    }

    $storage = OrderStorage::getInstance();

    $order = $storage->getOrder($request['order_id']);
    $order->setProduct($request['product']);

    parent::handle($request);
  }
}
