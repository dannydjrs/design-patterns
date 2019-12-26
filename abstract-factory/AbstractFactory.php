<?php

interface AbstractFactory
{
    public function createProduct() : Product;
    public function createShippingMethod() : ShippingMethod;
}