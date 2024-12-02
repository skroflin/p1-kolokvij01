<?php
include("nizovi.php");
include("index.php");

// $danas = date('Y-m-d');

$za_10_godina = date('Y-m-d', strtotime('+10 years'));

$danasnji_dan = dan_u_tjednu('2024-12-01');

$dan_za_10_godina = dan_u_tjednu($za_10_godina);

echo "Danas je " . $danasnji_dan . "<br>";
echo "Za 10 godina, na današnji datum biti će " . $dan_za_10_godina . "<br>";
?>

// moguće i bez varijable
// strtotime() funkcija omogućuje dodavanje godina