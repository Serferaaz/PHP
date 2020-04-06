
<?php

$user = 'root';
$pass = '';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=school2; port=3308', $user, $pass);
    foreach ($dbh -> query('SELECT * from cursist') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print_r("Error!: " . $e->getMessage() . "<br>");
    die();
}