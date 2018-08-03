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

    function requestLatLng($text)
    {
        $jsonurl = "https://api.openrouteservice.org/geocode/search?" .
            "api_key=" . $this->apiKey .
            "&text=" . urlencode($text);
        $json = file_get_contents($jsonurl);
        $result = json_decode($json);

        if (isset($result->{'features'}[0]->{'geometry'}->{'coordinates'})) {
            return new Coordinates(
                $result->{'features'}[0]->{'geometry'}->{'coordinates'}[0],
                $result->{'features'}[0]->{'geometry'}->{'coordinates'}[1]);
        }

        return null;
    }

    function requestRoute(Coordinates $fromCoords, Coordinates $toCoords)
    {
        $jsonurl = "https://api.openrouteservice.org/directions?" .
            "api_key=" . $this->apiKey .
            "&coordinates=" . $fromCoords->getLat() . "%2C" . $fromCoords->getLng() . "|" .
            $toCoords->getLat() . "%2C" . $toCoords->getLng() .
            "&profile=driving-car" .
            "&preference=fastest" .
            "&format=json" .
            "&units=km" .
            "&language=en" .
            "&geometry=true" .
            "&geometry_format=geojson" .
            "&instructions=true" .
            "&instructions_format=text";
        $json = file_get_contents($jsonurl);
        return json_decode($json);
    }

}