<?php


class Point2D
{
    protected $x;
    protected $y;

    public function __construct(float $x, float $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function __toString(): string {
        return "Point(x=$this->x, y=$this->y)";
    }

    public function bouger(float $dx, float $dy): Point2D {
        $this->x += $dx;
        $this->y += $dy;
        return $this;
    }

    public function getX(): float {
        return $this->x;
    }

    public function getY(): float {
        return $this->y;
    }

    public function setX(float $x): Point2D
    {
        $this->x = $x;
        return $this;
    }

    public function setY(float $y): Point2D
    {
        $this->y = $y;
        return $this;
    }
}