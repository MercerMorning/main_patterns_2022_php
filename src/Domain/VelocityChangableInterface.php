<?php

namespace App\Domain;

interface VelocityChangableInterface
{
    public function getVelocity(): Coordinate;

    public function getIncrement(): float;

    public function setVelocity(Coordinate $newVelocity);
}