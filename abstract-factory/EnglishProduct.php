<?php

class EnglishProduct implements Product
{
    public function __construct() {}

    public function getName() : string
    {
        return "Big Rubiks Cube";
    }

    public function getDescription() : string
    {
        return "The largest Rubiks cube in the world";
    }

    public function getPrice() : float
    {
        return 14.99;
    }
}