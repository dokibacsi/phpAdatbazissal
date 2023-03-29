<?php
    include_once './ab.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Magyar Kártya</title>
</head>
<body>
    <main>
    <?php
    $adatbazis = new Ab();
    //$adatbazis->adatLeker("kép", "szín");
    //$adatbazis->adatLeker2("név", "kép", "szín");
    $adatbazis->adatLekerTablazat("név", "kép", "szín");
    $adatbazis->kapcsolatBezar()
    ?>
    </main>
</body>
</html>