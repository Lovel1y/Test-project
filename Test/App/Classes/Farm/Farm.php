<?php

namespace App\Classes\Farm;

use App\Classes\Animals\Interfaces\AnimalInterface;

class Farm
{
    private $animals;

    private $products;

    public function getAnimalsTypeCount(): array
    {
        $animalsTypeAndCount = [];

        foreach ($this->animals as $animal) {
            if (empty($animalsTypeAndCount) || (!array_key_exists($animal->getAnimalType(), $animalsTypeAndCount))) //массив пуст и не содержит в себе ключ значение(животное)
            {
                $animalsTypeAndCount[$animal->getAnimalType()] = null;
            }

            $animalsTypeAndCount[$animal->getAnimalType()] += 1; // Если содержит ключ значение то посчитай
        }
        return $animalsTypeAndCount;
    }

    public function countProduct()
    {
        foreach ($this->animals as $animal) {
            if ((empty($this->products) || (!array_key_exists($animal->getProductType(), $this->products)))) {
                $this->products[$animal->getProductType()] = null;
            }
            $this->products[$animal->getProductType()] += $animal->getProduct();
        }
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function releaseProducts(): array
    {
        return $this->products = [];
    }

    public function addAnimal(AnimalInterface $animal)
    {
        $this->animals[] = $animal;
    }

    public function addAnimals(array $newAnimals)
    {
        foreach ($newAnimals as $animalClass => $count) {
            for ($i = 1; $i <= $count; $i++) {
                $this->addAnimal(new $animalClass(uniqid($animalClass)));
            }
        }
    }

    public function countWeeklyProducts()
    {
        for ($day = 1; $day <= 7; $day++) {
            $this->countProduct();
        }
    }
}