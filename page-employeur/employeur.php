<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "jobhive_hub";

    $connection = mysqli_connect($servername, $username, $password, $dbname);

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $titre = $_POST['titre'];
    $domaine = $_POST['domaine'];
    $adresse = $_POST['adresse'];
    $salaire = $_POST['salaire'];
    $contrat = $_POST['contrat'];
    $description = $_POST['description'];
    $sql = "INSERT INTO emploie (titre, description, adresse, domaine, salaire, contrat) VALUES ('$titre', '$description', '$adresse', '$domaine', '$salaire','$contrat')";

    if (mysqli_query($connection, $sql)) {
        header("Location: ../homepage/home.html");
        exit();
    } else {
        echo "Error registering user: " . mysqli_error($connection);
    }

    mysqli_close($connection);
}
?>