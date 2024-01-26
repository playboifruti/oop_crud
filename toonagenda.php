<?php 
require 'config.php';

$query = "SELECT * FROM crud_agenda";
$result = mysqli_query($mysqli, $query);

if (!$result) {
    echo "<p>FOUT!</p>";
    echo "<p>" . $query . "</p>";
    echo "<p>" . mysqli_error($mysqli) . "</p>";
    exit;
}

if (mysqli_num_rows($result) > 0) {
    while ($item = mysqli_fetch_assoc($result)){
        echo $item['Onderwerp'] . " - ";
        echo $item['Inhoud'] . "<br/>";
    }
} else {
    echo "<p>Geen items gevonden!</p>";
}
?>