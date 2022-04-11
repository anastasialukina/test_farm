<?php

abstract class Animal
{
    protected $uid;

    public function getUid()
    {
        return $this->uid;
    }

    /*
    * Add unique id to each animal in farm
    */
    public function setUid($uid): void
    {
        $this->uid = uniqid();
    }

    abstract public function getFarmProducts();
}