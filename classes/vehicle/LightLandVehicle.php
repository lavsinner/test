<?php

namespace classes\vehicle;

use MoveActionInterface;
use MusicActionInterface;

class LandVehicle extends AbstractVehicle implements MoveActionInterface, MusicActionInterface
{
	public function musicOn() : string
	{
		return $this->name . ' switched music on';
	}

	public function musicOff() : string
	{
		return $this->name . ' switched music off';
	}

	public function move() : string
	{
		return $this->name . ' moving';
	}

	public function stop() : string
	{
		return $this->name . ' stopped';
	}
}