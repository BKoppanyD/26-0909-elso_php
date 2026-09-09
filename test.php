<?php

$szam = "2";
$szoveg = "asd";
$karakter = "a";
$valosSzam = 3.15;
$trueorfalse = true;

echo "Ez van benne: " . $szam . " - Ez a típusa: " . gettype($szam) . "<br>";
echo "Ez van benne: " . $szoveg . " - Ez a típusa: " . gettype($szoveg) . "<br>";
echo "Ez van benne: " . $karakter . " - Ez a típusa: " . gettype($karakter) . "<br>";
echo "Ez van benne: " . $valosSzam . " - Ez a típusa: " . gettype($valosSzam) . "<br>";
echo "Ez van benne: " . $trueorfalse . " - Ez a típusa: " . gettype($trueorfalse) . "<br>";

var_dump($szam);
var_dump($szoveg);

$txt = "szoveg";

var_dump(str_contains($txt, "love"));

$array = [1, 2, 3, 4];
$arrayKarakter = ["A", "B", "C"];

print(max($array));

echo "<br>";

for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . "<br>";
}

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

// Egysoros komment

/*
Többsoros komment
*/

// Konstans
// Első a neve, a második amit tartalmaz

define("GREETING", "Welcome to W3Schools.com!");

echo GREETING;

$szam++;

echo $szam++;


// If - else

$a = 10;

if ($a < 20) {
    echo "Have a good day!";
}


// Match

$favcolor = "red";

$text = match ($favcolor) {
    "red" => "Your favorite color is red!",
    "blue" => "Your favorite color is blue!",
    "green" => "Your favorite color is green!",
    default => "Your favorite color is neither red, blue, nor green!",
};

echo $text;


// Függvény

function sum($x, $y)
{
    $z = $x + $y;

    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);


// PHP form handling

?>
