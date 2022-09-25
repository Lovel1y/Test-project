<?php

namespace App\Classes\Animals;


class Chicken extends Animal
{
    public const TYPE = 'Chicken';
    public const PRODUCT_TYPE = 'egg';

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
        return rand(0,1);
    }
}