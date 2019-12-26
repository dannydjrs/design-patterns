<?php

interface ShippingMethod
{
    public function getProvider() : string;

    public function getEstimatedTime() : string;

    public function getPrice() : float;
}