<?php
    use Ballen\Distical\Calculator as DistanceCalculator;
    use Ballen\Distical\Entities\LatLong;
    
    $lat1 = $_REQUEST['n_lat1'];
    $long1 = $_REQUEST['n_long1'];
    $lat2 = $_REQUEST['n_lat2'];
    $long2 = $_REQUEST['n_long2'];

    $ip1 = new LatLong($lat1, $long1);
    $ip2 = new LatLong($lat2, $long2);
    
    $distanceCalculator = new DistanceCalculator($ip1, $ip2);

    $distance = $distanceCalculator->get();

    echo 'Distancia entre las dos coordenadas: ' . $distance->asMiles();
?>