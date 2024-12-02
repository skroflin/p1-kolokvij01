<?php
function potenc($broj, $eksponent)
{
    $rezultat = 1;
    for ($i = 0; $i < $eksponent; $i++) {
        $rezultat *= $broj;
    }
    return $rezultat;
}

if (isset($_GET["broj"]) && isset($_GET["eksponent"])) {
    $broj = (int) $_GET["broj"];
    $eksponent = (int) $_GET["eksponent"];

    echo "Broj" . " " . $broj . " " . "na potenciju" . " " . $eksponent . " " . "iznosi" . " " . potenc($broj, $eksponent);
} else {
    echo "Unesite broj i eksponent putem querystring-a";
}
?>