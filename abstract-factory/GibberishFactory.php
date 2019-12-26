<?php

class GibberishFactory implements AbstractFactory
{
    public function __construct() {}

    public function createProduct() : Product
    {
        return new GibbersishProduct();
    }

    public function createShippingMethod() : ShippingMethod
    {
        return new GibbersishShippingMethod();
    }
}