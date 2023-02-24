<?php

class Apple extends Fruit
{
    protected function setWeight() :void
    {
        $this->weight = mt_rand(150, 180);
    }
}