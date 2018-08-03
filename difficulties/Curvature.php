<?php
/**
 * A difficulty in the road. The curvature object consists of a radius of a turn.
 */


namespace difficulties;


class Curvature
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return double; the radius of the curvature.
     */
    public function getRadius()
    {
        return $this->radius;
    }

    public function __toString()
    {
        return "Curvature{ Radius: " . $this->getRadius();
    }


}