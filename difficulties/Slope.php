<?php
/**
 * Created by IntelliJ IDEA.
 * User: Toby T. van Willegen
 * Date: 3-8-2018
 * Time: 22:10
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
     * @return double Returns the angle of the ascension, negative if descent.
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