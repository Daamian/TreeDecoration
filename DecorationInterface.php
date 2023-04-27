<?php

interface DecorationInterface
{
    public function getPrice(): PriceInterface;
    public function getColor(): string;
    public function getSize(): DecorationSize;
}