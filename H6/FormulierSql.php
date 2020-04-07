<?php

// connectie met de DB en kijken of dat lukt
$conn = mysqli_connect("127.0.0.1", "root", "", "phpopdracht", "3308");

if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
//sql query bekijken en naar de DB sturen
$querry = "SELECT * FROM login";
$result = $conn->query($querry);

//kijken of de invoer van de user in de DB staat
while ($data = $result->fetch_assoc()) {
    if ($_POST['inlognaam'] == $data['loginnaam'] && $_POST['wachtwoord'] == $data['wachtwoord']){
        $login = true;
        break 1;
    } else {
        $login = false;

    }
}
//wat er wordt gedaan met de data
if ($login){
    echo "Welkom ".$data['loginnaam'];
} elseif (!$login){
    echo "Sorry, geen toegang!";
}