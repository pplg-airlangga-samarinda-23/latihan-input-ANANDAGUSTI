<!DOCTYPE html>
<html lang="en">
<head>
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
    </form>
</body>
</html>
