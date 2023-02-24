<?php
//Абстрактный класс наших будущих деревьев
abstract class Tree 
{
    protected Serial $serial;
    protected int $minFruitfulness;
    protected int $maxFruitfulness;

    public function __construct(Serial $serial = null)
    {
        $this->serial = $serial ?? Serial::generate();
        $this->setFruitfullnes();
    }

    
    abstract public function getFruit(): Fruit;

  
    public function harvest() :array
    {
        $countFruits = mt_rand($this->minFruitfulness, $this->maxFruitfulness);
        $basket = [];
        for($i = 0; $i < $countFruits; $i++)
        {
            $basket[] = $this->getFruit();
        }

        return $basket;
    }

   
    abstract protected function setFruitfullnes(): void;


   
    public function getSerial(): Serial
    {
        return $this->serial;
    }

}