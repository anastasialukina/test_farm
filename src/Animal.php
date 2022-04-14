<?php

namespace App;
abstract class Animal
{
    protected string $uid;

    /*
   * Add unique id to each animal in farm
   */

    function __construct()
    {
        $this->uid = uniqid();
    }

    abstract public function getFarmProducts();

    abstract public function getName();

    public function getUid(): string
    {
        return $this->uid;
    }
}