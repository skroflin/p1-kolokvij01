<?php
include("nizovi.php");

$datum = date('Y-m-d');

for ($i = 0; $i <= 7; $i++) {
    $trenutni_datum = date('Y-m-d', strtotime("+$i days"));
    $dan_u_tjednu = $tjedan[date('N', strtotime($trenutni_datum))];
    echo "<li>" . $trenutni_datum . " - " . $dan_u_tjednu . "</li>";
}
?>