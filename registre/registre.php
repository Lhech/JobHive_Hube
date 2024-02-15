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

    $nom_et_prenom = $_POST['name'];
    $email = $_POST['email'];
    $password_plain = $_POST['password'];
    $description = $_POST['description'];
    $role = $_POST['role'] === 'utilisateur' ? 'utilisateur' : 'employeur';

    $password_hashed = password_hash($password_plain, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (nom_et_prenom, email, mot_de_passe, description, role) VALUES ('$nom_et_prenom', '$email', '$password_hashed', '$description', '$role')";

    if (mysqli_query($connection, $sql)) {
        header("Location: ../login/login.html"); 
        exit();
    } else {
        echo "Error registering user: " . mysqli_error($connection);
    }

    mysqli_close($connection);
}
?>
