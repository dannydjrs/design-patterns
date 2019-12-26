<?php

class FrenchShippingMethod implements ShippingMethod
{
    public function getProvider() : string
    {
        return "DHL";
    }

    public function getEstimatedTime() : string
    {
        return "3 - 5 Business days";
    }

    public function getPrice() : float
    {
        return 4.99;
    }
}