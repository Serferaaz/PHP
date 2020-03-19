<?php

$swimclub = array("De Spartelkuikens" => "25", "De Waterbuffels" => "32", "Plonsmderin" => "11", "Bommetje" => "23");

$plaatje = 0;

foreach ($swimclub as $club => $leden) {
    $afgerondLedenAantal = floor($leden/5);
    echo $club. " ". $leden;
    for ($plaatje = 0; $plaatje < $afgerondLedenAantal; $plaatje++) {
        echo "<img src='img/zwem.png'>";
    }
    echo "<br>";
}
?>