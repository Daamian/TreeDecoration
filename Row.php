<?php
class Row
{
    /** @var DecorationInterface[] */
    private array $decorations;
    private int $decorationLimit;

    public function __construct(int $decorationLimit)
    {
        $this->decorationLimit = $decorationLimit;
    }

    public function addDecoration(DecorationInterface $decoration): void
    {
        // TODO: Implement addDecoration() method.
    }
}