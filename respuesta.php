<?php
    use Ballen\Distical\Calculator as DistanceCalculator;
    use Ballen\Distical\Entities\LatLong;
    
    $lat1 = $_REQUEST['n_lat1'];
    $long1 = $_REQUEST['n_long1'];
    $lat2 = $_REQUEST['n_lat2'];
    $long2 = $_REQUEST['n_long2'];

    // Set our Lat/Long coordinates
    $ip1 = new LatLong($lat1, $long1);
    $ip2 = new LatLong($lat2, $long2);
    
    // Get the distance between these two Lat/Long coordinates...
    $distanceCalculator = new DistanceCalculator($ip1, $ip2);
    
    // You can then compute the distance...
    $distance = $distanceCalculator->get();
    // you can also chain these methods together eg. $distanceCalculator->get()->asMiles();
    
    // We can now output the miles using the asMiles() method, you can also calculate and use asKilometres() or asNauticalMiles() as required!
    echo 'Distancia entre las dos coordenadas: ' . $distance->asMiles();
?>