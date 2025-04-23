<?php
$server = 'localhost';
$base = 'motory';
$user = 'root';
$pass = '';

$mysqli = new mysqli($server, $user, $pass, $base);


if ($mysqli->connect_error) {
    die("Błąd połączenia: " . $mysqli->connect_error);
}

$query = "SELECT wycieczki.nazwa, wycieczki.opis, wycieczki.poczatek, zdjecia.zrodlo 
          FROM wycieczki 
          INNER JOIN zdjecia ON wycieczki.id = zdjecia.id";

$result = $mysqli->query($query);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $nazwa = $row['nazwa'];
        $poczatek = $row['poczatek'];
        $opis = $row['opis'];
        $zdjecie = $row['zrodlo'];

        echo "<p id=\"naglowek\" style=\"color: white;\">$nazwa, rozpoczyna się w $poczatek, <a href=\"$zdjecie.jpg\" style=\"color: white;\">Zobacz zdjęcie</a></p>";
        echo "<p id=\"opis\">$opis</p>";
    }
} else {
    echo "Błąd zapytania: " . $mysqli->error;
}

$mysqli->close();
?>

