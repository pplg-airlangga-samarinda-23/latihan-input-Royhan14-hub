<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Umur</title>
</head>
<body>
    <h2>Hitung Umur Berdasarkan Tanggal Lahir</h2>
    
    <form method="POST" action="">
        <label for="birthdate">Masukkan Tanggal Lahir:</label>
        <input type="date" id="birthdate" name="birthdate" required>
        <br><br>
        <input type="submit" value="Hitung Umur">
        <button type="reset">Reset</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $birthdate = $_POST['birthdate'];
        if (!empty($birthdate)) {
            $today = new DateTime();
            $birthdateDate = new DateTime($birthdate);
            $age = $today->diff($birthdateDate)->y;
            echo "<p>Umur Anda adalah: <strong>$age tahun</strong></p>";
        } else {
            echo "<p>Mohon masukkan tanggal lahir yang valid.</p>";
        }
    }
    ?>
</body>
</html>
