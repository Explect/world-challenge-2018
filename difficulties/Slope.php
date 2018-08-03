<?php
/**
 * A difficulty in the road. The slope object consists of an angle of ascent or descent.
 */

namespace difficulties;


class Slope
{
    private $angleOfAscent;

    public function __construct($angleOfAscent)
    {
        $this->angleOfAscent = $angleOfAscent;
    }

    /**
     * @return double; Returns the angle of the ascension, negative if descent.
     */
    public function getAngleOfAscent()
    {
        return $this->angleOfAscent;
    }

    public function __toString()
    {
        return "Slope{ Angle of ascent: " . $this->getAngleOfAscent();
    }
}