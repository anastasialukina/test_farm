<?php

class Farm
{
    /*
	*@array Group of animals
	*/
    /*
        $animalsGroup = [
            'Cow' => [
                new Cow,
                new Cow,
                //...
            ],
            'Hen' => [
                new Hen,
                new Hen,
                new Hen,
                //...
            ],
        ];
     */
    public array $animalsGroup = [];


    /*
	*@array Array of products
	*/
    public array $productsCollection = [];

    /*public function createAnimals(array $animals): void
    {
        foreach ($animals as $animalType => $animalCount) {

            for ($i = 1; $i <= $animalCount; $i++) {
                $this->animalsGroup["$animalType"][] = new $animalType();
            }
        }
    }*/

    public function addAnimals(Animal $animal){
        $animal->setUid();
        $name = $animal->getName();
        $this->animalsGroup[$name][] = new $animal;
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
            $this->productsCollection["$key"] = $product;
        }
    }

}