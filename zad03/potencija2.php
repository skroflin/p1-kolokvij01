<?php
if (isset($_GET["broj"]) && isset($_GET["eksponent"])) {
    $broj = (int) $_GET["broj"];
    $eksponent = (int) $_GET["eksponent"];

    echo "Broj" . " " . $broj . " " . "na potenciju" . " " . $eksponent . " " . "iznosi" . " " . pow($broj, $eksponent);
} else {
    echo "Unesite broj i eksponent putem querystring-a";
}
?>