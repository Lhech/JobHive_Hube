<?php
include("connexion.php");


$sql = "SELECT * FROM emploie ORDER BY id DESC ";
$result = mysqli_query($connection, $sql);


while ($row = mysqli_fetch_assoc($result)) {
    echo "<h2>" . $row['titre'] . "</h2>";
    echo "<p>" . $row['description'] . "</p>";

}
?>
