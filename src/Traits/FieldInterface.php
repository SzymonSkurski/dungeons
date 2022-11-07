<?php


interface FieldInterface
{
    /**
     * rotate element clock wise
     * @param int $times how many rotation steps, each 90 degree
     */
    public function rotate(int $times = 1): void;
    public function relocate(int $x, int $y): void;

    /**
     * get adjacent fields
     */
    public function getAdjacent(): void;

    //

}