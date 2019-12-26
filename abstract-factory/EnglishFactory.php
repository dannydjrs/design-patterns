<?php

class EnglishFactory implements AbstractFactory
{
    public function __construct() {}

    public function createProduct() : Product
    {
        return new EnglishProduct();
    }

    public function createShippingMethod() : ShippingMethod
    {
        return new EnglishShippingMethod();
    }
}