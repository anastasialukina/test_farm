<?php

class Hen extends Animal
{
    /**
     * @var int Min quantity of production
     */
    private const MIN_QUANTITY_PRODUCTION = 0;

    /**
     * @var int Max quantity of production
     */
    private const MAX_QUANTITY_PRODUCTION = 1;


    /**
     *Get random quantity of production in range [min, max]
     * @return int
     * @throws Exception
     */
    public function getFarmProducts(): int
    {
        return random_int(self::MIN_QUANTITY_PRODUCTION, self::MAX_QUANTITY_PRODUCTION);
    }
}