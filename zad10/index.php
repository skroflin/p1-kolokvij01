<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Programiranje 1</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Programiranje 1 - Multidimenzionalni nizovi</a>
            </div>

        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h2>Grupa Jamiroqai</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 h4">
                <form method="post">
                    Odaberite album:
                    <select name="album">
                        <option value="-">-</option>
                        <?php
                        include("albumi.php");
                        foreach ($Jamiroquai3 as $album => $pjesma) {
                            echo "<option value='" . $album . "'>" . $album . " (" . $pjesma["godina_izdanja"] . ")" . "</option>";
                        }
                        ?>
                    </select>
                    <input type="submit" name="submit" value="Prikaži">
                </form>
                <hr>
            </div>
        </div>
        <?php
        if (isset($_POST["submit"]) && $_POST["album"] != "-") {
            // $odabraniAlbum = $_POST["album"];
            // $podaciAlbuma = $Jamiroquai3[$odabraniAlbum];
            // 1. method!
            ?>
            <div class="row">
                <div class="col-sm-5">
                    <?php
                    $slika = str_replace(" ", "_", $_POST["album"])
                        ?>
                    <img src="slike/<?php echo $slika; ?>.jpg" class="img-responsive">
                </div>
                <div class="col-sm-7">
                    <ol>
                        <?php
                        // echo "<h1>" . $odabraniAlbum . " (" . $podaciAlbuma["godina_izdanja"] . ")" . "</h1>";
                        echo "<h1>" . $_POST["album"] . " (" . $Jamiroquai3[$_POST["album"]]["godina_izdanja"] . ")" . "</h1>";
                        echo "<hr>";
                        // foreach ($podaciAlbuma["pjesme"] as $redniBroj => $pjesma) {
                        //     echo "<li>" . $pjesma["naslov"] . " (" . $pjesma["trajanje"] . ")" . "</li></h3>";
                        // }
                        foreach ($Jamiroquai3[$_POST["album"]]["pjesme"] as $pjesma) {
                            echo "<li>" . $pjesma["naslov"] . " (" . $pjesma["trajanje"] . ")" . "</li></h3>";
                        }
                        ?>
                    </ol>
                </div>
            </div>
            <?php
        }
        ?>


        <hr>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="jquery-1.11.3.min.js"></script>-->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--<script src="bootstrap.js"></script>-->
</body>

</html>