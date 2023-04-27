<?php

interface PriceInterface
{
    public function getValue(): float;
    public function getCurrency(): string;
}