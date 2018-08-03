<?php
/**
 * Created by IntelliJ IDEA.
 * User: Toby T. van Willegen
 * Date: 3-8-2018
 * Time: 21:57
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
     * @return double the radius of the curvature.
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