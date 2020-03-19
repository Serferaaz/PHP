<?php

function deelbaarDoor3($invoerwaarde) {

    $uitkomst = $invoerwaarde / 3;

    if (is_int($uitkomst)) {
        echo "True";
    } else {
        echo "False";
    }
}
deelbaarDoor3(4);
?>