<?php

print("De volgende momenten zijn nog beschikbaar:<ul>");

$aKappersagenda = array(
    "9:15" => "Mevr. Pietersen",
    "9:30" => "Mevr. Willems",
    "9:45" => "",
    "10:00" => "Paul van den Broek",
    "10:15" => "Karel de Meeuw",
    "10:30" => ""
);

foreach ($aKappersagenda as $tijd => $afspraak) {
    if ($afspraak == ""){
        print("<li>".$tijd."</li>") ;
        echo $afspraak;
    }
}