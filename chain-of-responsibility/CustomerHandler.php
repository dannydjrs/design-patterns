<?php

class CustomerHandler extends BaseHandler
{
  protected function canHandle($request)
  {
    return isset($request['customer']);
  }

  public function handle($request)
  {
    if (!$this->canHandle($request)) {
      parent::handle($request);
      return;
    }

    $storage = OrderStorage::getInstance();

    $order = $storage->getOrder($request['order_id']);
    $order->setCustomer($request['customer']);

    parent::handle($request);
  }
}
