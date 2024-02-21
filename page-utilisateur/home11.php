<?php
include("connexion.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="home1.css">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="icon" type="img" href="./images/logo.png">
</head>

<body>
  <header>
    <article class="logo">
      <img src="./images/logo1.png" alt="logo">
      <h1>JOBHIVE HUB</h1>
    </article>
    <ul class="navbar">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Find Job</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    <?php
    $idU=$_SESSION['id_user'];
    $sql = "SELECT * FROM user WHERE id_user=$idU";

    $result1 = mysqli_query($connection, $sql);


    while ($row = mysqli_fetch_assoc($result1)) {

      ?>
    <article class="user">
    
        <h1 class="nom_user"><?php echo $row['nom_et_prenom']; ?></h1>
        <p class="role_user"><?php echo $row['role']; ?></p>
    </article>
    <?php } ?>
  </header>
  <section class="section1">
    <form action="" method="POST">
      <h1 class="slegon">jobhivehub.tn, votre plateforme <br>emploi poste en Tunisie</h1>
      <article class="search">
        <i class='bx bx-search'></i>
        <input type="text" name="search" id="search" placeholder="Search">
      </article>
      <article class="recherch">
        <button type="submit" class="btn1">Recherche</button>
      </article>
    </form>
  </section>
  <section class="section2">
    <h3 class="h3">Les emploi disponibles à la une</h3>
  </section>
  <section class="section3">

    <?php
    $sql = "SELECT * FROM emploie ORDER BY id_emploie DESC ";
    $result = mysqli_query($connection, $sql);


    while ($row = mysqli_fetch_assoc($result)) {

      ?>
      <article class="article1">
        <div class="div2">
          <a href="#" class="link">
            <?php echo $row['titre']; ?>
          </a>
          <div class="div1">
            <p class="socite"><i class='bx bxs-school'></i>
              <?php echo $row['nom_du_société']; ?>
            </p>
            <p class="location"><i class="ri-map-pin-line"></i>
              <?php echo $row['adresse']; ?>
            </p>
          </div>
          <p class="description">
            <?php echo $row['description']; ?>
          </p>
        </div>
      </article>
      <?php

    }
    ?>

  </section>
  <!--<section class="section4">
    <article class="article1">
      <img src="./images/image2.png" alt="socite" srcset="">
      <div class="div2">
        <a href="#" class="link">Développeur Web .Net/.Net Core Expérimenté</a>
        <div class="div1">
          <p class="socite"><i class='bx bxs-school'></i>NAKI SERVICES</p>
          <p class="location"><i class="ri-map-pin-line"></i>Tunis,Marsa,tunis</p>
        </div>
        <p class="description">Développeur Web .Net/.Net Core Expérimenté</p>
      </div>
    </article>
  </section>
  <section class="section5">
    <article class="article1">
      <img src="./images/image3.png" alt="socite" srcset="">
      <div class="div2">
        <a href="#" class="link">Comptable Senior (Comptabilité Française)</a>
        <div class="div1">
          <p class="socite"><i class='bx bxs-school'></i>NAKI SERVICES</p>
          <p class="location"><i class="ri-map-pin-line"></i>Tunis, lac2 ,tunis</p>
        </div>
        <p class="description">Comptable Senior (Comptabilité Française)</p>
      </div>
    </article>
  </section>
  <section class="section6">
    <article class="article1">
      <img src="./images/image4.png" alt="socite" srcset="">
      <div class="div2">
        <a href="#" class="link">Developer Senior (developer Française)</a>
        <div class="div1">
          <p class="socite"><i class='bx bxs-school'></i>NAKI SERVICES</p>
          <p class="location"><i class="ri-map-pin-line"></i>Tunis, centre ville,tunis</p>
        </div>
        <p class="description">Developer Senior (developer Française)</p>
      </div>
    </article>
  </section>-->
  <footer class="footer">

    <ul class="navbar footer-navbar">
      <li><a href="#">Privacy Policy</a></li>
      <li><a href="#">Terms of Service</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
    <p>&copy; 2023 Jobhive Hub. All rights reserved.</p>
  </footer>
  <script src="home1.js"></script>
</body>

</html>