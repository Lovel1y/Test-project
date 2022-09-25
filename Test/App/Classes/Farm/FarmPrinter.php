<?php


namespace App\Classes\Farm;


class FarmPrinter
{
    private $farm;

    public function __construct(Farm $farm)
    {
        $this->farm = $farm;
    }

    function showWeeklyProductsList()
    {
        $products = $this->farm->getProducts();
        foreach ($products as $productType => $productQuantity) {
            echo $productType . ' - ' . $productQuantity . "\n";
        }
    }

    function showAnimalsList()
    {
        $animals = $this->farm->getAnimalsTypeCount();
        foreach ($animals as $animalType => $animalQuantity) {
            echo $animalType . ' - ' . $animalQuantity . "\n";
        }
    }
}