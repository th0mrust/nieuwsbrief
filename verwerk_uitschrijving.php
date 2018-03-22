<?php
// HET FORMULIER UITLEZEN (DATA BINNENHALEN)
$mailadres = $_POST['mailadres'];
// CONNECTIE MAKEN MET DE DATABASE
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = '25296_db';

$dbc = mysqli_connect($host,$username,$password,$dbname) or die ('Error connecting.');
// QUERY SCHRIJVEN VOOR ZOEKEN NAAR DATA
$query = "SELECT * FROM nieuwsbrief WHERE mailadres = '$mailadres'";
// QUERY UITVOEREN
$result = mysqli_query($dbc,$query) or die ('Error querying  (SELECT).');
// TELLEN HOEVEEL REGELS WE NU HEBBEN
$number_of_rows = mysqli_num_rows($result);
// TESTEN OF ER REGELS ZIJN EN DAAR CONCLUSIE AAN VERBIONDEN
if ($number_of_rows == 0 ) {
    echo 'Helaas het ' . $mailadres . ' mailadres staat niet in de database.<br>';
    echo '<a href="uitschrijven.php">Klik hier om het nogmaals te proberen..</a><br>';
    exit();
}
// QUERY SVHRIJVEN VOOR VERWIJDEREN DATA
$query = "DELETE FROM nieuwsbrief WHERE mailadres = '$mailadres'";
// QUERY UITVOEREN
$result = mysqli_query($dbc,$query) or die ('Error querying (DELETE).');
// CONNECTIE VERBREKEN
mysqli_close($dbc);
// VERSLAG DOEN VAN HET RESULTAAT
echo 'Het mailadres ' . $mailadres . ' is verwijderd uit de database!<br>';
?>

<a href="index.php">Klik hier om terug te keren naar de homepage</a><br>
