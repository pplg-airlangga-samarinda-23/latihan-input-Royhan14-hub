<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Volume Tabung</title>
</head>
<body>
    <h1>Hitung Volume Tabung</h1>
    <form action="volume.php" method="post">
        <label for="radius">Jari-jari alas (r):</label>
        <input type="number" id="radius" name="radius" step="any" required><br><br>

        <label for="height">Tinggi Tabung (h):</label>
        <input type="number" id="height" name="height" step="any" required><br><br>

        <input type="submit" value="Hitung Volume">
        <button type="reset">Reset</button>
    </form>
</body>
</html>