<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require ('animal.php');
require ('Frog.php');
require ('Ape.php');

$sheep = new Animal("Shaun");
echo "Name: " . $sheep->getName() . "<br>"; // "Shaun"
echo "Legs: " . $sheep->getLegs() . "<br>"; // 4
echo "Cold blooded: " . $sheep->getColdBlooded() . "<br>"; // "no"
echo "<br>";


// $kodok = new Frog("Buduk");
$kodok = new Frog ("Buduk");
echo "Name: " . $kodok->getName() . "<br>"; // "Buduk"
echo "Legs: " . $kodok->getLegs() . "<br>"; // 4
echo "Cold blooded: " . $kodok->getColdBlooded() . "<br>";
echo "Jump: ";
$kodok->jump(); // "hop hop"
echo "<br>";


$sungokong = new Ape("Kera sakti");
echo "Name: " . $sungokong->getName() . "<br>"; // "Kera sakti"
echo "Legs: " . $sungokong->getLegs() . "<br>"; // 2
echo "Cold blooded: " . $sungokong->getColdBlooded() . "<br>";
echo "Yell: ";
$sungokong->yell(); // "Auooo"
?>
</body>
</html>