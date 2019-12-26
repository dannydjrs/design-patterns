<?php

class FrenchProduct implements Product
{
    public function __construct() {}

    public function getName() : string
    {
        return "Big Cube Rubiks";
    }

    public function getDescription() : string
    {
        return "Le plus grand cube de Rubiks au monde";
    }

    public function getPrice() : float
    {
        return 14.99;
    }
}