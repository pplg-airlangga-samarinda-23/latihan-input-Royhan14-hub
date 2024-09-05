<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = intval($_POST['number']);
    $choice = $_POST['choice'];
    $nama = "Royhan";

    echo "<h1>Output:</h1>";
    
    for ($i = 1; $i <= $number; $i++) {
        if ($choice == "ganjil" && $i % 2 != 0) {
            echo $i . " " . $nama . "<br>";
        } elseif ($choice == "genap" && $i % 2 == 0) {
            echo $i . " " . $nama . "<br>";
        } else {
            echo $i . "<br>";
        }
    }
}
?>