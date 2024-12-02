<?php
function prim($broj)
{
    if ($broj < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($broj); $i++) {
        if ($broj % $i === 0) {
            return false;
        }
    }
    return true;
}

if (isset($_GET["od"]) && (isset($_GET["do"]))) {
    $od = (int) $_GET["od"];
    $do = (int) $_GET["do"];

    if ($od > $do) {
        echo "Početak raspona mora biti manji ili jednak kraju raspona";
    } else {
        echo "Primarni brojevi u rasponu" . " " . $od . " do " . $do . ":" . "<br>";
        for ($i = $od; $i <= $do; $i++) {
            if (prim($i)) {
                echo "<li>" . $i . "</li>";
            }
        }
    }
} else {
    echo "Postavite parametre putem querystring-a.";
}
?>