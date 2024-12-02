<?php
include("nizovi.php");
// echo date('N');
function dan_u_tjednu($datum)
{
    global $tjedan;
    $dut_br = date('N', strtotime($datum));
    $dut_txt = $tjedan[$dut_br] . "<br>";
    return $dut_txt;
}

// echo dan_u_tjednu("30.11.2024.");
?>