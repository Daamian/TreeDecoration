<?php
interface TreeInterface
{
    public function addDecoration(DecorationInterface $decoration, int $rowNumber): void;
    public function removeDecoration(DecorationInterface $decoration, int $rowNumber): void;
    public function calculate(): PriceInterface;
}