<?php

class Pear extends Fruit
{
    protected function setWeight() :void
    {
        $this->weight = mt_rand(130, 170);
    }
}