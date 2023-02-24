<?php

class AppleTree extends Tree
{
    public function getFruit() :Fruit
    {
        return new Apple();
    }

    protected function setFruitfullnes() :void
    {
        $this->minFruitfulness = 40;
        $this->maxFruitfulness = 50;
    }
}