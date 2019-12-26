<?php

class Order
{
  protected $id;
  protected $customer;
  protected $product;
  protected $payment;

  public function __construct($id)
  {
    $this->id = $id;
    $this->customer = null;
    $this->product = null;
    $this->payment = null;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setCustomer($customer)
  {
    $this->customer = $customer;
  }

  public function setProduct($product)
  {
    $this->product = $product;
  }

  public function setPayment($payment)
  {
    $this->payment = $payment;
  }
}
