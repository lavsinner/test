<?php

namespace classes\fuel;

abstract class AbstractFuelType
{
    abstract public static function getFuelType() : string;
}