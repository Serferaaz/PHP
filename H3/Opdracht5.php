<!doctype html>
<head>
    <title>Document</title>
</head>
<body>
<?php
$leeftijd = 66;
$bedrag = 10;

if ($leeftijd > 65) {
    $bedrag = $bedrag * 0.5;
}
if ($leeftijd <= 12) {
    $bedrag = $bedrag * 0.5;
}
if ($leeftijd < 3) {
    $bedrag = 0;
} else {
    $bedrag = 10;
}
?>
</body>
</html>