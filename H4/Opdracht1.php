<?php

function celsiusToFahrenheit($invoergetal) {
    $fahrenheit = $invoergetal * 1.8 +32;
    return $fahrenheit;
}
echo celsiusToFahrenheit(25);
?>