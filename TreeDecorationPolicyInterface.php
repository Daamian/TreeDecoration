<?php

interface TreeDecorationPolicyInterface
{
    public function isSatisfied(TreeInterface $tree): bool;
}