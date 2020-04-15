<?php
session_start();

    if($_SESSION['user'] && $_SESSION['user']['rol'] == 'Administator') {
         echo "<h1>Welkom ".$_SESSION['user']." op het admingedeelte van de website.</h1>";
         echo "<p><a href='Login.php'>Login</a></p>";
    } else {
    header('location: Login.php');
    // terug naar inlogscherm
    }