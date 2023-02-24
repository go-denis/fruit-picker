<?php
require_once 'api/Serial.php';
require_once 'api/Trees/FruitTree.php';
require_once 'api/Trees/AppleTree.php';
require_once 'api/Trees/PearTree.php';
require_once 'api/Fruits/Fruit.php';
require_once 'api/Fruits/Apple.php';
require_once 'api/Fruits/Pear.php';
require_once 'api/Garden.php';



$garden = new Garden();

//Инициализация Яблолнь
for($i = 0; $i < 10; $i++)
{
    $garden->plant(new AppleTree());
}

//Инициализация грушевых деревьев
for($i = 0; $i < 15; $i++)
{
    $garden->plant(new PearTree());
}


$harvest = $garden->harvest();

echo 'Яблоки ' . count($harvest['AppleTree']) . 'шт. Общий вес ' . $harvest['AppleTree']['weight'] .'г'. PHP_EOL;
echo 'Груши ' . count($harvest['PearTree']) . 'шт. Общий вес ' . $harvest['PearTree']['weight'] .'г'. PHP_EOL;

