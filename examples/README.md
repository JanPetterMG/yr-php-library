#### Current Forecast
```php
$yr = Yr\Yr::create("Norway/Oslo/Oslo/Oslo", "/tmp");

$forecast = $yr->getCurrentForecast();
echo sprintf("Time: %s to %s\n", $forecast->getFrom()->format("H:i"), $forecast->getTo()->format("H:i"));
echo sprintf("Temp: %s %s \n", $forecast->getTemperature(), $forecast->getTemperature('unit'));
echo sprintf("Wind: %smps %s\n", $forecast->getWindSpeed(), $forecast->getWindDirection('name'));
```
```
Time: 16:00 to 17:00
Temp: 8 celsius 
Wind: 5.7mps South-southwest
```

#### Forecasts in range / hourly forecasts
```php
$yr = Yr\Yr::create("Norway/Vestfold/Sandefjord/Sandefjord", "/tmp");

foreach($yr->getHourlyForecasts(strtotime("now"), strtotime("tomorrow")) as $forecast) {
    echo sprintf("Time: %s, %s degrees\n", $forecast->getFrom()->format("H:i"), $forecast->getTemperature());
}
```
```
Time: 16:00, 7 degrees
Time: 17:00, 7 degrees
Time: 18:00, 6 degrees
Time: 19:00, 6 degrees
[...]
```

#### Meta info
```php
$yr = Yr\Yr::create("Norway/Vestfold/Sandefjord/Sandefjord", "/tmp/");

echo "Location: " . $yr->getLocation() . "\n";
echo "Last update: " . $yr->getLastUpdated()->format("d.m.y H:i") . "\n";
echo "Next update: " . $yr->getNextUpdate()->format("d.m.y H:i") . "\n";
```
```
Location: Sandefjord
Last update: 09.03.14 10:38
Next update: 09.03.14 17:00
```

#### Weather Stations
```php
$yr = Yr\Yr::create("Norway/Oslo/Oslo/Oslo", "/tmp", 10, null);

$weather_stations = $yr->getWeatherStations();

foreach($weather_stations as $station) {
    print "Station: {$station->getName()}\n";
    print "Temperature: {$station->getForecast()->getTemperature()}\n";
    print "Wind Direction: {$station->getForecast()->getWindDirection()}\n";

    print "\n";
}
```
```
Station: Oslo (Blindern)
Temperature: 7.6
Wind Direction: SSW

Station: Bygdøy
Temperature: 7.9
Wind Direction: 

Station: Alna
Temperature: 8.1
Wind Direction: SSW
```