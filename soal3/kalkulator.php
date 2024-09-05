<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = 0;

    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            echo "<h1>Hasil: " . $num1 . " + " . $num2 . " = " . $result . "</h1>";
            break;

        case 'subtract':
            $result = $num1 - $num2;
            echo "<h1>Hasil: " . $num1 . " - " . $num2 . " = " . $result . "</h1>";
            break;

        case 'multiply':
            $result = $num1 * $num2;
            echo "<h1>Hasil: " . $num1 . " * " . $num2 . " = " . $result . "</h1>";
            break;

        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
                echo "<h1>Hasil: " . $num1 . " / " . $num2 . " = " . $result . "</h1>";
            } else {
                echo "<h1>Pembagian dengan nol tidak diperbolehkan!</h1>";
            }
            break;
    }
}
?>