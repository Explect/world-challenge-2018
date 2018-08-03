<?php
/**
 * Using two input locations, this requests an route between the two using the OpenStreetMaps API
 */

namespace Route;
class RouteRequester
{
    private $apiKey;
    function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    function requestData($fromLat, $fromLng, $toLat, $toLng)
    {
        $jsonurl = "https://api.openrouteservice.org/directions?
        api_key=" . $this->apiKey . "
        &coordinates=" . $fromLat . "%2C" . $fromLng . "|" .
            $toLat . "%2C" . $toLng . "
        &profile=driving-car
        &preference=fastest
        &format=json
        &units=km
        &language=en
        &geometry=true
        &geometry_format=geojson
        &instructions=true
        &instructions_format=text";
        $json = file_get_contents($jsonurl);
        return json_decode($json);
    }

}