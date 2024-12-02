<?php
include("nizovi.php");
foreach ($eu as $kljuc => $naziv) {
    $broj_slova = strlen($naziv);
    // echo "<li>" . $naziv . " - " . $kljuc . "</li>";
    asort($eu);
    if ($broj_slova >= 9)
        echo "<li>" . $naziv . " - " . $broj_slova . "</li>";
}
?>