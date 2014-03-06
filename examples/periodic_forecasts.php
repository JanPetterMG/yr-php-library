<?php

include __DIR__ . DIRECTORY_SEPARATOR . "../Yr/Yr.php";
include __DIR__ . DIRECTORY_SEPARATOR . "../Yr/Forecast.php";

$yr = Yr\Yr::create("Norway/Vestfold/Sandefjord/Sandefjord", "/tmp");

foreach($yr->getPeriodicForecasts() as $forecast) {
    print $forecast->getFrom()->format("H:i") . ": " . $forecast->getTemperature() . "\n";
}
