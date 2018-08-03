<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once("route/RouteRequester.php");
require_once("route/Coordinates.php");

//Retrieve OpenRouteService API key from file not on git. This file is added on the server.
$apiKeyFile = fopen("apiKey.txt", "r") or die("Unable to open apiKey file!");
$openRouteServiceApiKey = fgets($apiKeyFile);
fclose($apiKeyFile);

$routeRequester = new \Route\RouteRequester($openRouteServiceApiKey);

$fromText = "Oud Beijerland, The Netherlands";
$toText = "Delft, The Netherlands";
?><!DOCTYPE html>
<html>
<head>
    <title>Hello Explect!</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<h1>Hello Explect!</h1><br><br>
Here is a route from <? echo $fromText; ?>  to <? echo $toText; ?>, including all coords of turning points. Have fun!<br>
Interesting link: <a href="https://berkela.home.xs4all.nl/cad%20vervoer/cad%20vervoer%20draaicirkels.html">Berkela turningcircle (Dutch)</a>
<hr><hr><hr><hr><hr>
<pre>
<?
$fromCoords = $routeRequester->requestLatLng($fromText);
$toCoords = $routeRequester->requestLatLng($toText);

if($fromCoords != null && $toCoords != null) {
    echo $json_string = json_encode(
        $routeRequester->requestRoute($fromCoords, $toCoords), JSON_PRETTY_PRINT);
}else{
    echo "One of your places could not be found.";
}
?>
</pre>
</body>
</html>