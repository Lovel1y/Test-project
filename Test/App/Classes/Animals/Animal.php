<?php

namespace App\Classes\Animals;


use App\Classes\Animals\Interfaces\AnimalInterface;

abstract class Animal implements AnimalInterface
{
    protected $id;


    public function __construct($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}