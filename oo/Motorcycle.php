<?php

/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 15/08/2017
 * Time: 23:54
 */
require_once ("Vehicle.php");

class Motorcycle extends Vehicle
{
    public function __construct($brand = null, $color = null)
    {
        parent::__construct($brand, strtoupper($color));
    }

}