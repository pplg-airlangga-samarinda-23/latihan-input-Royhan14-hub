<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $radius = $_POST['radius'];
    $height = $_POST['height'];

    
    $volume = pi() * pow($radius, 2) * $height;

    echo "<h1>Hasil Perhitungan Volume Tabung</h1>";
    echo "Jari-jari alas: " . $radius . " satuan<br>";
    echo "Tinggi tabung: " . $height . " satuan<br>";
    echo "Volume tabung: " . $volume . " satuan kubik";
}
?>