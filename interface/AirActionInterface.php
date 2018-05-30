<?php

namespace \interface;

interface AirActionInterface
{
    public function takeOff() : string;
    public function fly() : string;
    public function land() : string;
}