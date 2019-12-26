<?php

class PaymentHandler extends BaseHandler
{
  protected function canHandle($request)
  {
    return isset($request['payment']);
  }

  public function handle($request)
  {
    if (!$this->canHandle($request)) {
      parent::handle($request);
      return;
    }

    $storage = OrderStorage::getInstance();

    $order = $storage->getOrder($request['order_id']);
    $order->setPayment($request['payment']);

    parent::handle($request);
  }
}
