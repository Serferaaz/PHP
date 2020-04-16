<html>
<head>
    <title>Opdracht 6</title>
    <style>
        img{
            width: 100px;
            height: 100px;
        }

        table, td, tr{
            border: 3px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<table>
    <?php

        $swimclub = array("De Spartelkuikens" => "25", "De Waterbuffels" => "32", "Plonsmderin" => "11", "Bommetje" => "23");

        $plaatje = 0;

        foreach ($swimclub as $club => $leden) {
            $afgerondLedenAantal = floor($leden/5);
            print '<tr>';
            print "<td>$club</td>";
            print "<td>$leden</td>";
            print '<td>';
            for ($plaatje = 0; $plaatje < $afgerondLedenAantal; $plaatje++) {
                echo "<img src='img/zwem.png'>";
             }
            echo "<br>";
            print '<tr>';
}
?>
</table>
</body>
</html>