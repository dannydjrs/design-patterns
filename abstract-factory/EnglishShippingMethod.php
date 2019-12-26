<?php

class EnglishShippingMethod implements ShippingMethod
{
    public function getProvider() : string
    {
        return "Royal Mail";
    }

    public function getEstimatedTime() : string
    {
        return "3 Days";
    }

    public function getPrice() : float
    {
        return 2.99;
    }
}