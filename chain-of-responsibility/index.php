<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$h0 = new OrderHandler();
$h1 = new CustomerHandler();
$h2 = new ProductHandler();
$h3 = new PaymentHandler();

$h0->setNext($h1);
$h1->setNext($h2);
$h2->setNext($h3);

$incomingOrders = [
  [
    'order_id' => 1,
    'customer' => 'John Smith',
    'product' => 'iPhone 99',
    'payment' => 'paid',
  ],
  [
    'order_id' => 2,
    'customer' => 'Ellen Dogman',
    'product' => 'Cleaning cloth',
    'payment' => 'paid',
  ],
  [
    'order_id' => 3,
    'customer' => 'Cheap man',
    // 'product' => 'Cleaning cloth',
    'payment' => 'unpaid',
  ],
];

foreach ($incomingOrders as $orderRequest) {
  $h0->handle($orderRequest);
}

$storage = OrderStorage::getInstance();
$order = $storage->getOrder(1);
print_r($order);

$order = $storage->getOrder(2);
print_r($order);

$order = $storage->getOrder(3);
print_r($order);
