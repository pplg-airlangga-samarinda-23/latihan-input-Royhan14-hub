<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $distance = $_POST['distance'];
    $conversion = $_POST['conversion'];
    $result = 0;

    switch ($conversion) {
        case 'm':
            $result = $distance * 1000;
            echo "<h1>Hasil Konversi</h1>";
            echo $distance . " km = " . $result . " meter";
            break;

        case 'cm':
            $result = $distance * 100000;
            echo "<h1>Hasil Konversi</h1>";
            echo $distance . " km = " . $result . " centimeter";
            break;

        case 'mm':
            $result = $distance * 1000000;
            echo "<h1>Hasil Konversi</h1>";
            echo $distance . " km = " . $result . " millimeter";
            break;
    }
}
?>