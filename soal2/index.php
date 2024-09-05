<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Jarak</title>
</head>
<body>
    <h1>Konversi Jarak</h1>
    <form action="konversi.php" method="post">
        <label for="distance">Jarak dalam km:</label>
        <input type="number" id="distance" name="distance" step="any" required><br><br>

        <label for="conversion">Pilih konversi:</label>
        <select id="conversion" name="conversion" required>
            <option value="m">km ke meter</option>
            <option value="cm">km ke centimeter</option>
            <option value="mm">km ke millimeter</option>
        </select><br><br>
        <input type="submit" value="Konversi">
        <button type="reset">Reset</button>
    </form>
</body>
</html>