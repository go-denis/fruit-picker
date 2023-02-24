<?php
//Наш фруктовый сад
class Garden
{
    protected array $garden;


    public function __construct(array $garden = [])
    {
        $this->garden = $garden;
    }


    public function plant(Tree $tree)
    {
        $this->garden[] = $tree;
    }


    public function harvest() :array
    {
        $storage = [];

        //Перебираем все деравья в саду и записываем в массив
        foreach($this->garden as $tree)
        {   
            $treeClass = get_class($tree);
            if(!isset($storage[$treeClass]))
            {
                $storage[$treeClass] = [];
            }
            array_push($storage[$treeClass], ...$tree->harvest());
        }

        //Подсчет коллличества фруктов с деревьев
        foreach($storage as $treeClass => $fruits)
        {   
            $storage[$treeClass]['weight'] = $this->calculateWeight($fruits);
        }
        return $storage;
    }


    protected function calculateWeight(array $fruits) :int
    {
        $weight = 0;
        foreach($fruits as $fruit)
        {
            $weight += $fruit->getWeight();
        }
        return  $weight;
    }

   
    public function getgarden(): array
    {
        //Возвращаем прототип сада
        return clone $this->garden;
    }
}