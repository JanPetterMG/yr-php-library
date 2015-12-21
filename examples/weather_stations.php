<?php

include __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'autoload.php';

$yr = Yr\Yr::create('Norway/Oslo/Oslo/Oslo', '/tmp', 10, null);

$weather_stations = $yr->getWeatherStations();

foreach ($weather_stations as $station) {
    echo "Station: {$station->getName()}\n";
    echo "Temperature: {$station->getForecast()->getTemperature()}\n";
    echo "Wind Direction: {$station->getForecast()->getWindDirection()}\n";

    echo "\n";
}
