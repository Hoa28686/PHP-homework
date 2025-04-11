<?php

// temperature conversion
$temp = '';
$tempResult = '';
$tempUnit='';
if (isset($_POST['temp'])) {
    $temp = $_POST['temp'];
    $tempUnit = $_POST['tempUnit'];
    $tempResult = round(convertTemp($temp, $tempUnit), 3);
}
function convertTemp($temp, $tempUnit)
{
    if ($tempUnit == 'F') {
        return ($temp * 9 / 5) + 32;
    } elseif ($tempUnit == 'K') {
        return $temp + 273.15;
    }
}


// speed conversion
$speed = '';
$speedResult = '';
$speedUnit ='';
if (isset($_POST['speed'])) {
    $speed = $_POST['speed'];
    $speedUnit = $_POST['speedUnit'];
    $speedResult = round(convertspeed($speed, $speedUnit), 3);
}
function convertspeed($speed, $speedUnit)
{
    if ($speedUnit == 'meter') {
        return $speed / 3.6;
    } elseif ($speedUnit == 'knot') {
        return $speed / 1.852;
    }
}

// mass conversion
$mass = '';
$massResult = '';
$massUnit ='';
if (isset($_POST['mass'])) {
    $mass = $_POST['mass'];
    $massUnit = $_POST['massUnit'];
    $massResult = round(convertmass($mass, $massUnit), 3);
}
function convertmass($mass, $massUnit)
{
    if ($massUnit == 'kilo-gram') {
        return $mass * 1000;
    } elseif ($massUnit == 'gram-kilo') {
        return $mass / 1000;
    }
}
function checkSelected($unit, $value){
    return ($unit == $value) ?'selected':'';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Measurement converter</title>
</head>

<body>
    <div class="container flex">
        <h2>Measurement converter</h2>
       
        <form class="flex" method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
            <h3>Temperature</h3>
            <select class="unit" name="tempUnit">
                <option value="F"  <?= checkSelected($tempUnit,'F') ?>>Celsius to Fahrenheit</option>
                <option value="K"  <?= checkSelected($tempUnit,'K') ?> >Celsius to Kelvin</option>
            </select>
            <input class="value" type="number" step="any" name="temp" value="<?= $temp ?>">
                <button class="submit" type="submit">Convert</button>
                <p class="result" value="tempResult"><?= $tempResult ?></p>
        </form>
        <form class="flex" method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
            <h3>Speed</h3>
            <select class="unit" name="speedUnit">
                <option value="meter" <?= checkSelected($speedUnit,'meter') ?>>km/h to m/s</option>
                <option value="knot"<?= checkSelected($speedUnit,'knot') ?>>km/h to knot</option>
            </select>
            <input class="value" type="number" step="any" name="speed"  value="<?= $speed ?>">
                <button class="submit" type="submit">Convert</button>
                <p class="result" value="speedResult"><?= $speedResult ?></p>
        </form>
        <form class="flex" method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
            <h3>Mass</h3>
            <select class="unit" name="massUnit">
                <option value="kilo-gram" <?= checkSelected($massUnit,'kilo-gram') ?>>kilogram to gram</option>
                <option value="gram-kilo" <?= checkSelected($massUnit,'gram-kilo') ?>>gram to kilogram</option>
            </select>
            <input class="value" type="number" step="any" name="mass"  value="<?= $mass ?>">
                <button class="submit" type="submit">Convert</button>
                <p class="result" value="massResult"><?= $massResult ?></p>
            
        </form>
       
    </div>
</body>

</html>