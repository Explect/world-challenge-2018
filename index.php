<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once("route/RouteRequester.php");

$apiKeyFile = fopen("apiKey.txt", "r") or die("Unable to open apiKey file!");
$openRouteServiceApiKey = fgets($apiKeyFile);
fclose($apiKeyFile);

$routeRequester = new \Route\RouteRequester($openRouteServiceApiKey);
?><!DOCTYPE html>
<html>
<head>
    <title>Hello Explect!</title>
</head>
<body>
<h1>Hello Explect!</h1>
<pre>
<?
echo $json_string = json_encode(
    $routeRequester->requestData(8.34234, 48.23424,
        8.34423, 48.26424), JSON_PRETTY_PRINT);
?>
</pre>
</body>
</html>