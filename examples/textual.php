<?php

include __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'autoload.php';

$yr = Yr\Yr::create('Norway/Vestfold/Sandefjord/Sandefjord', '/tmp/');

foreach ($yr->getTextualForecasts() as $forecast) {
    echo $forecast->getTitle()."\n";
    echo $forecast->getText()."\n\n";
}
