<?php
//Класс фруктов
abstract class Fruit
{
    protected string $weight;
    
    public function __construct()
    {
        $this->setWeight();
    }

  
    abstract protected function setWeight(): void;
   
    public function getWeight(): string
    {
        return $this->weight;
    }
}