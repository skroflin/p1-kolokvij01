<?php
$prvi_zadani_broj = isset($_GET["prvi_zadani_broj"]) ? $_GET["prvi_zadani_broj"] : 1;
$drugi_zadani_broj = isset($_GET["drugi_zadani_broj"]) ? $_GET["drugi_zadani_broj"] : 100;

$start = max($prvi_zadani_broj, $drugi_zadani_broj);
$end = min($prvi_zadani_broj, $drugi_zadani_broj);

for ($i = $start; $i >= $end; $i--) {
    if ($i % 7 === 0) {
        if ($i % 3 === 0 & $i % 5 === 0) {
            echo "<li style='color: green;'>" . $i . "</li>";
        } elseif ($i % 3 === 0) {
            echo "<li style='color: red;'>" . $i . "</li>";
        } elseif ($i % 5 === 0) {
            echo "<li style='color: blue;'>" . $i . "</li>";
        } else {
            echo "<li>" . $i . "</li>";
        }
    }
}
?>