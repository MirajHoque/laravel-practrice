<?php

namespace App\Services\Geolocation;

use App\Services\Satellite\Satellite;
use App\Services\Map\Map;

class Geolocation{
    
    private $map;
    private $satellite;

    function __construct(Map $map, Satellite $satellite)
    {
        $this->map = $map;
        $this->satellite = $satellite;
    }

    function search(string $name){
        $locationInfo = $this->map->findAddress($name);
        return $this->satellite->pinpoint($locationInfo);
    }
}