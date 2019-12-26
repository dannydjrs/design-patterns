<?php

class GibbersishShippingMethod implements ShippingMethod
{
    public function getProvider() : string
    {
        return "BLAShrewo";
    }

    public function getEstimatedTime() : string
    {
        return "5 Retuymes";
    }

    public function getPrice() : float
    {
        return 2.99;
    }
}