<?php
function potenc($broj)
{
    return $broj * $broj;
}

if (isset($_GET["trazen_broj"])) {
    $trazen_broj = (int) $_GET["trazen_broj"];
    echo "Broj " . $trazen_broj . " njegova potencija - " . potenc($trazen_broj);
} else {
    echo "Niste unijeli broj!";
}
?>