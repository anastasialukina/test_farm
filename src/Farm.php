<?php

namespace App;

class Farm
{
    /*
	*@array Group of animals
	*/

    public array $animalsGroup = [];

    /*
	*@array Array of products
	*/
    public array $productsCollection = [];


    public function addAnimal(Animal $animal)
    {
        $name = $animal->getName();
        $this->animalsGroup[$name][] = $animal;
    }

    /*
     * Count of animals each type to get info about them
     */
    public function countOfAnimals(): array
    {
        $counts = [];
        foreach ($this->animalsGroup as $name => $animals) {
            $counts[$name] = count($animals);
        }

        return $counts;
    }

    public function collectProducts(): void
    {
        foreach ($this->animalsGroup as $key => $value) {
            $product = 0;
            foreach ($value as $animal) {
                $product += $animal->getFarmProducts();
            }
            $this->productsCollection[$key] = $product;
        }
    }

}