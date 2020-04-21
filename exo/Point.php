<?php

namespace exo;

class Point
{
    private $x;
    private $y;

    function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function distance($otherPoint)
    {
        $distanceX = $otherPoint->x - $this->x;
        $distanceY = $otherPoint->y - $this->y;
        return sqrt(pow($distanceX, 2) +  pow($distanceY, 2));
    }

    function __toString()
    {
        echo "(" . $this->x . "," . $this->y . ")";
    }
}
