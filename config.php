<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL);

$db_hostname = 'localhost';
$dbd_username = 'adminDima';
$db_password = 'dima0987A';
$db_database = '088894_database';

$mysqli = mysqli_connect($db_hostname, $dbd_username, $db_password, $db_database);

if (!$mysqli) {
    echo "FOUT: Geen connectie met de database. <br>";
    echo "ERROR: " . mysqli_connect_error() . "<br/>";
    exit;
} else {
    echo "Verbinding met " . $db_database . " is gemaakt!<br>";
}

// INSERT INTO `crud_agenda` (`ID`, `Onderwerp`, `Inhoud`, `Begindatum`, `Einddatum`, `Prioriteit`, `Status) VALUES 
// ();
?>