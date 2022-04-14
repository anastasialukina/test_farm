<?php

namespace App;

class FarmInfo extends Farm
{
    /*
    * Print info about animals
    */
    public function printAnimals($farm)
    {
        echo 'На ферме ';
        var_dump($farm->countOfAnimals());
    }

    /*
    * Print info about products
    */
    public function printCollection($farm)
    {
        echo 'Собрано молока ' . $farm->productsCollection["Cow"] . ' л.' . PHP_EOL;
        echo 'Собрано яиц ' . $farm->productsCollection["Hen"] . ' шт.' . PHP_EOL;
    }
}