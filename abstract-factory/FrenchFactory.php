<?php

class FrenchFactory implements AbstractFactory
{
    public function __construct() {}

    public function createProduct() : Product
    {
        return new FrenchProduct();
    }

    public function createShippingMethod() : ShippingMethod
    {
        return new FrenchShippingMethod();
    }
}