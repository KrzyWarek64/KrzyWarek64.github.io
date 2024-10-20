<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='styles.css'>
    <script src="script.js"></script>
    <title>Zostaw Wiadomość!</title>
</head>
<link rel="icon" type="image/png" href="pol.png"/>
<body id="zostaw">
    <div>
        <form action="wiadomosc.php" method="post">
            <div id="mess">
                <label for="wiadomosc">Zostaw wiadomość!</label><br>
                <textarea class="margin" id="wiadomosc" name="wiadomosc" rows="5" cols="50" required></textarea><br><br>
                <button class="button-81" class="margin" type="submit">Wyślij</button>
            </div>
        </form>
    </div>
</body>
</html>