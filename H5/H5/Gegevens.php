<?php

if ($_POST["naam"] == "") {
    echo "Je moet nog een naam nog invullen";
    echo "<br><a href='Formulier2.html'>Ga terug naar het formulier</a>";
}

if ($_POST["adres"] == "") {
    echo "Je moet nog een adres nog invullen";
    echo "<br><a href='Formulier2.html'>Ga terug naar het formulier</a>";
}

if ($_POST["email"] == "") {
    echo "Je moet nog een  E-mail nog invullen";
    echo "<br><a href='Formulier2.html'>Ga terug naar het formulier</a>";
}

if ($_POST["wachtwoord"] == "") {
    echo "Je moet nog een wachtwoord nog invullen";
    echo "<br><a href='Formulier2.html'>Ga terug naar het formulier</a>";
}
// Als je dit aan zet dan zie je alle gegevens weer op het ingestuurde formulier

//echo "Je naam is: ".$_POST["naam"];
//echo "<br>";
//echo "Je adres is: ".$_POST["adres"];
//echo "<br>";
//echo "Je e-mail is: ".$_POST["email"];
//echo "<br>";
//echo "Je wachtwoord is: ".$_POST["wachtwoord"];
?>