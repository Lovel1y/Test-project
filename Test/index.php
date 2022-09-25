<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Classes\Animals\Chicken;
use App\Classes\Animals\Cow;
use App\Classes\Farm\Farm;
use App\Classes\Farm\FarmPrinter;

$farm = new Farm();
$farmPrinter = new FarmPrinter($farm);

$animals = [
    Cow::class => 10,
    Chicken::class => 20,
];
$farm->addAnimals($animals);

//Вывод количества животных, подсчёт товаров и их вывод
$farmPrinter->showAnimalsList();
$farm->countWeeklyProducts();
$farmPrinter->showWeeklyProductsList();
$farm->releaseProducts();

//Добавим новых животных
$newAnimals = [
    Cow::class => 1,
    Chicken::class => 5,
];
$farm->addAnimals($newAnimals);

echo "----------------" . PHP_EOL;

//Вывод количества животных, подсчёт товаров и их вывод
$farmPrinter->showAnimalsList();
$farm->countWeeklyProducts();
$farmPrinter->showWeeklyProductsList();

