<!DOCTYPE html>
<html>
<head>
    <title>PHP opdracht 1.2</title>
</head>
<body>
<?php
$bomen = array("img_0050.jpg", "lillypilly1.jpg", "Maranchery_Biyyam_Kayal_kandal.jpg");

foreach ($bomen as $boom) {
    echo "<img src= 'bomen/".$boom."'>";
}

?>
</body>
</html>