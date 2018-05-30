<?php

namespace classes\factory;

use classes\vehicle\AbstractVehicle;

abstract class AbstractFactory {
	abstract public function createVehicle(string $name) : AbstractVehicle;
}