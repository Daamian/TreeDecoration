<?php

interface TreeFactoryInterface
{
    public function createSmall(): TreeInterface;
    public function createMedium(): TreeInterface;
    public function createBig(): TreeInterface;
}