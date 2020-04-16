<html>
<head>
    <meta charset="UTF-8">
    <title>link</title>
    <style>
        table, tr, td{
            border: solid 3px black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=school2;port=3308", $username, $password);
    //set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "connected successfully";
}
catch (PDOException $e)
{
    echo "connection failed:" . $e->getMessage() . '<br>';
}
$query = "SELECT * from cursist";
$stmt = $conn->prepare($query) or die('Error 33');
$stmt->execute() or die('Error 34');

echo '<table>';

while ($array = $stmt->fetch()) {
    echo '<tr>';
    echo "<td>" . $array['cursistnr'] . "</td>";
    echo "<td>" . $array['naam'] . "</td>";
    echo "<td>" . $array['roepnaam'] . "</td>";
    echo "<td>" . $array['straat'] . "</td>";
    echo "<td>" . $array['postcode'] . "</td>";
    echo "<td>" . $array['plaats'] . "</td>";
    echo "<td>" . $array['geslacht'] . "</td>";
    echo "<td>" . $array['geb_datum'] . "</td>";
    echo '</tr>';
}
echo '</tables>';
?>

</html>