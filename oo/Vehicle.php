<?php

/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 15/08/2017
 * Time: 23:36
 */
class Vehicle
{
    public $brand;
    public $color;
    public $engine;

    public function __construct($brand = null, $color = null)
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function getEngine($type = null)
    {
        return "This Motor is ".$this->engine." {$type}"   ;
    }

    public function getBrand()
    {
        return "This Brand is {$this->brand}";
    }


}