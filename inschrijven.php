<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="myStyle.css">
    <title>NIEUWSBRIEF - INSCHRIJVEN</title>
</head>
<body>
<h1>NIEUWSBRIEF</h1>
<h2>Inschrijven</h2>
<a href="index.php">Klik hier om terug te keren naar de homepage</a><br>

<form method="post" action="verwerk_inschrijving.php">
    <label>voornaam:<input type="text" name="voornaam" /></label><br>
    <label>Tussenvoegsel:<input type="text" name="tussenvoegsel" /></label><br>
    <label>Achternaam:<input type="text" name="achternaam" /></label><br>
    <label>Mailadres:<input type="email" name="mailadres" /></label><br><br>
    <input type="submit" name="submit" />
</form>

</body>
</html>