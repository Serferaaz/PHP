<?php
    session_start();

    if (isset($_SESSION['user']) && $_SESSION['user']['rol'] == 'administrator') {
        echo "<h1>Welkom " . $_SESSION['user']['naam'] . " op het admingedeelte van de website.</h1>";
        echo "<p><a href='Login.php'>Login</a></p>";
    } else {
        echo "<h1>U heeft onvoldoende rechten om op deze pagina te bezoeken</h1>";
        echo "<p><a href='Login.php'>Login</a></p>";
        // terug naar inlogscherm
    }

