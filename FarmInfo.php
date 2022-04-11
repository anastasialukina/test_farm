<?php

class FarmInfo extends Farm
{
    public function printAnimals($farm)
    {
        echo 'На ферме ';
        var_dump($farm->countOfAnimals());
        //echo 'На ферме '. $farm->countOfAnimals() . ' куриц '. PHP_EOL;
    }
    /*
    * Print info about products
    */
    public function printCollection($farm)
    {
        echo 'Собрано молока '. $farm->productsCollection["Cow"] . ' л.'. PHP_EOL;
        echo 'Собрано яиц '. $farm->productsCollection["Hen"] . ' шт.'. PHP_EOL;
    }
}