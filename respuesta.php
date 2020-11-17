<?php
    use Ballen\Distical\Calculator as DistanceCalculator;
    use Ballen\Distical\Entities\LatLong;
    // Set our Lat/Long coordinates
    $ipswich = new LatLong(52.057941, 1.147172);
    $london = new LatLong(51.507608, -0.127822);
    
    // Get the distance between these two Lat/Long coordinates...
    $distanceCalculator = new DistanceCalculator($ipswich, $london);
    
    // You can then compute the distance...
    $distance = $distanceCalculator->get();
    // you can also chain these methods together eg. $distanceCalculator->get()->asMiles();
    
    // We can now output the miles using the asMiles() method, you can also calculate and use asKilometres() or asNauticalMiles() as required!
    echo 'Distance in miles between Central Ipswich and Central London is: ' . $distance->asMiles();
?>