<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = intval($_POST['number']);

    echo "<h1>Pola Bintang:</h1>";
    for ($i = 0; $i < $number; $i++) {
        for ($j = 0; $j < 2 * ($number - $i) - 1; $j++) {
            echo "* ";
        }
        echo "<br>";
        for ($k = 0; $k <= $i; $k++) {
            echo "&nbsp;&nbsp;";
        }
    }
}
?>
