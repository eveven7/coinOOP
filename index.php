<?php
include "./Coin.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<?php
$coin = new Coin();
$coin->setCountry("Russia");
$coin->setValue ("12.12");
$coin->setYear("1704");
$coin->setMaterial("Silver");

$coin1 = new Coin;
$coin1->setCountry("England");
$coin1->setValue ("10");
$coin1->setYear("1707");
$coin1->setMaterial("nickel-brass");

$coin2 = new Coin;
$coin2->setCountry("Spain");
$coin2->setValue ("10");
$coin2->setYear("1702");
$coin2->setMaterial("gold and silver");

$coin3 = new Coin;
$coin3->setCountry("Lithuania");
$coin3->setValue ("10");
$coin3->setYear("1702");
$coin3->setMaterial("gold and silver");

$coin4 = new Coin;
$coin4->setCountry("Israel");
$coin4->setValue ("10");
$coin4->setYear("1702");
$coin4->setMaterial("gold and silver");



$coins = [$coin,$coin1,$coin2, $coin3, $coin4];

foreach ($coins as $moneta) {
    foreach ($moneta as $propercioPavadinimas => $monetaPropertis) {
         echo $propercioPavadinimas."=>".$monetaPropertis . ", ";
    }
    echo "<br>";
 }
?>



<table class="table">
    <thead>
        <tr>
            <?php
                    echo "<th>". "Country "."</th>";
                    echo "<th>". "Value "."</th>";
                    echo "<th>". "Year "."</th>";
                    echo "<th>". "Material "."</th>";

            ?>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($coins as $coin) {
                echo "<tr>";
                    echo "<td>". $coin->getCountry() ."</td>";
                    echo "<td>". $coin->getValue()."</td>";
                    echo "<td>".$coin->getYear()."</td>";
                    echo "<td>".$coin->getMaterial()."</td>";
                echo "</tr>";
            }

        ?>
    </tbody>
</table>


</body>
</html>