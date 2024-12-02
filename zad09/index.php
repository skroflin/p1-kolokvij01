<?php
include("nizovi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 11</title>
</head>

<body>
    <h2 style="text-align: center;">
        Pretraži grad
    </h2>
    <div style="display: flex; align-items: center; justify-content: center;">
        <form action="" method="post">
            <input type="text" name="searchword" placeholder="Unesi naziv grada ...">
            <input type="submit" name="submit" value="Pretraži">
        </form>
    </div>
    <br>
    <div style="display: flex; align-items: center; justify-content: center;">
        <table border="1" cellspacing="0" cellpadding="4">
            <tr>
                <td>Naziv grada</td>
                <td>Poštanski broj</td>
            </tr>
            <?php
            if (isset($_POST["submit"])) {
                $searchword = mb_strtolower(trim($_POST["searchword"]));

                foreach ($postanski_uredi as $kljuc => $naziv_grada) {
                    if (mb_stripos(mb_strtolower($naziv_grada), $searchword) !== false) {
                        echo
                            "
                        <tr>
                            <td>" . $naziv_grada . "</td>
                            <td>" . $kljuc . "</td>
                        </tr>
                        ";
                    }
                }
            }
            ?>
        </table>
    </div>
</body>

</html>