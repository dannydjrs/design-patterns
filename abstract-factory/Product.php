<?php

interface Product
{
    public function getName() : string;

    public function getDescription() : string;

    public function getPrice() : float;
}