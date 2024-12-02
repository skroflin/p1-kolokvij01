<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 07</title>
    <style>
        td {
            width: 40px;
            height: 40px;
        }

        .black {
            background-color: black;
        }

        .white {
            background-color: white;
        }

        div {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div>
        <table border="1">
            <?php
            $redovi = isset($_GET["r"]) ? min((int) $_GET["r"], 10) : 10;
            $kolone = isset($_GET["k"]) ? min((int) $_GET["k"], 10) : 10;

            for ($i = 1; $i <= $redovi; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $kolone; $j++) {
                    $klasa = ($i + $j) % 2 === 0 ? 'white' : 'black';
                    echo "<td class='" . $klasa . "'></td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>