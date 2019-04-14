<?php

class Point
{
    public $x;
    public $y;

    public function __construct($_x, $_y)
    {
        $this->x = $_x;
        $this->y = $_y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setX($newX)
    {
        $this->x = $newX;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setY($newY)
    {
        $this->y = $newY;
    }

    public function getXY()
    {
        $array = array($this->x,$this->y);
        return $array;
    }

    public function setXY($newx,$newy)
    {
        $this->x = $newx;
        $this->y = $newy;
    }

    public function toString()
    {
        $array = $this->getXY();
        print_r($array);
    }
}

?>