<?php
include("nizovi.php");

$zadani_datum = isset($_GET["pocetni_datum"]) ? $_GET["pocetni_datum"] : "2024-01-01";

$zadani_ts = strtotime($zadani_datum);

$dan_u_tjednu = date('N', $zadani_ts);

$ponedjeljak_ts = strtotime('-' . ($dan_u_tjednu - 1) . ' days', $zadani_ts);

for ($i = 0; $i < 7; $i++) {
    $trenutni_datum_ts = strtotime("+$i days", $ponedjeljak_ts);
    $trenutni_datum = date('Y-m-d', $trenutni_datum_ts);
    $dan_u_tjednu = $tjedan[date('N', $trenutni_datum_ts)];
    echo "<li>" . $trenutni_datum . " - " . $dan_u_tjednu . "</li>";
}
?>