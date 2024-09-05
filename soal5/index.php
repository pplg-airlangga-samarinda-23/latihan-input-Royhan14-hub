<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 5</title>
</head>
<body>
    <h1>Soal 5: Cetak Bilangan dengan Ganjil/Genap</h1>
    <form action="bilangan.php" method="post">
        <label for="number">Masukkan Bilangan (5 - 20):</label>
        <input type="number" id="number" name="number" min="5" max="20" required><br><br>

        <label for="choice">Pilih Ganjil atau Genap:</label>
        <select id="choice" name="choice" required>
            <option value="ganjil">Ganjil</option>
            <option value="genap">Genap</option>
        </select><br><br>

        <input type="submit" value="Tampilkan">
        <button type="reset">Reset</button>
    </form>
</body>
</html>