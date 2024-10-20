
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dziękuję!</title>
</head>
<link rel="icon" type="image/png" href="pol.png"/>
<body>
<style>
body {
    background-color: rgb(26, 26, 26);
    color: aliceblue;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    font-family: Arial, sans-serif;
}
</style>
</body>
</html>


<?php
// zapisz_wiadomosc.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pobierz wiadomość z formularza
    $wiadomosc = htmlspecialchars($_POST['wiadomosc']);

    // Otwórz plik do zapisu wiadomości
    $plik = fopen("wiadomosci.txt", "a");

    if ($plik) {
        // Zapisz wiadomość do pliku
        fwrite($plik, $wiadomosc . "\n---\n");
        fclose($plik);
        echo "Twoja wiadomość została zapisana!";
    } else {
        echo "Błąd podczas zapisywania wiadomości.";
    }
} else {
    echo "Nieprawidłowe żądanie.";
}

