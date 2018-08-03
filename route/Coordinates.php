<?php
/**
 * Created by IntelliJ IDEA.
 * User: Toby T. van Willegen
 * Date: 3-8-2018
 * Time: 23:19
 */

namespace Route;


class Coordinates
{
private $lat;
private $lng;

    /**
     * Coordinates constructor.
     * @param $lat
     * @param $lng
     */
    public function __construct($lat, $lng)
    {
        $this->lat = $lat;
        $this->lng = $lng;
    }

    /**
     * @return double
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @return double
     */
    public function getLng()
    {
        return $this->lng;
    }

}