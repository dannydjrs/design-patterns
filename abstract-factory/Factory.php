<?php

class Factory
{
    public static function getFactory(string $location) : AbstractFactory
    {
        switch ($location) {
            case "FR":
                return new FrenchFactory();
            case "RAND":
                return new GibberishFactory();
            case "GB":
            default:
                return new EnglishFactory();
        }
    }
}