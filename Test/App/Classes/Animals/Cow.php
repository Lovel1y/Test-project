<?php

namespace App\Classes\Animals;

class Cow extends Animal
{
    public const TYPE = 'Cow';
    public const PRODUCT_TYPE = 'milk';

    public function getAnimalType()
    {
       return self::TYPE;

    }
    public function getProductType()
    {
       return self::PRODUCT_TYPE;

    }

    public function getProduct()
    {
        return rand(8,12);
    }
}