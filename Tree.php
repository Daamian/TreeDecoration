<?php

class Tree implements TreeInterface
{
    /** @var Row[] */
    private array $rows = [];
    private PriceInterface $price;
    private TreeSize $size;
    /** @var TreeDecorationPolicyInterface[]  */
    private array $decorationPolicies = [];

    public function __construct(array $rows, PriceInterface $price, TreeSize $treeSize, TreeDecorationPolicyInterface ...$decorationPolicies)
    {
        $this->rows = $rows;
        $this->price = $price;
        $this->size = $treeSize;
        $this->decorationPolicies = $decorationPolicies;
    }

    public function addDecoration(DecorationInterface $decoration, int $rowNumber): void
    {
        // TODO: Implement addDecoration() method.
    }

    public function removeDecoration(DecorationInterface $decoration, int $rowNumber): void
    {
        // TODO: Implement removeDecoration() method.
    }

    public function calculate(): PriceInterface
    {
        // TODO: Implement calculate() method.
    }
}