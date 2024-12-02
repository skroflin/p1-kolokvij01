<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 01</title>
</head>

<body>
    <form action="" method="post">
        <label for="ime">
            Unesite vaše ime:
        </label>
        <input type="text" name="ime" placeholder="Npr. Sven...">
        <br>
        <label for="">
            Koliko puta želite da se ponovi?
        </label>
        <input type="text" name="ponovi" placeholder="Npr. 1, 2, 3 ...">
        <br>
        <input type="submit" name="submit" value="Predaj">
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $ime = isset($_POST["ime"]) ? trim($_POST["ime"]) : "";
        $ponovi = isset($_POST["ponovi"]) ? (int) $_POST["ponovi"] : 1;
        if (empty($ime)) {
            echo "<p>Unesite ime!</p>";
        } else {
            for ($i = 0; $i < $ponovi; $i++) {
                echo "<p>" . "Dobar dan " . $ime . "!" . "</p>" . "<br>";
            }
        }
    }
    ?>
</body>

</html>