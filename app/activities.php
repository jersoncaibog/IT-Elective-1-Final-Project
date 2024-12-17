<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Activities</title>
    <link rel="stylesheet" href="activities.css" />
    <link rel="stylesheet" href="../public/styles/index.css"">
    <link rel="stylesheet" href="../public/styles/globals.css">
    <link rel="stylesheet" href="../public/styles/activities.css">
  </head>
  <body>
    <?php 
        if (isset($_SESSION['username'])) {
            include "../components/dashboardNav.php";
        } else {
            include "../components/navbar.php";
        }
    ?>
    
    <main>
      <div class="content-container">
        <a href="./activity1.php" id="presenxia" class="content">
          <h4>Activity 1</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus soluta commodi sapiente quia molestias, quae praesentium velit? Consectetur, ex iusto.</p>
        </a>
        <a href="./activity2.php" id="activities" class="content">
          <h4>Activity 2</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia nulla ducimus ipsum nemo veritatis qui.</p>
        </a>
        <a href="./activity3.php" id="presenxia" class="content">
          <h4>Activity 3</h4>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex explicabo maxime quisquam maiores. Veritatis..</p>
        </a>
        <a href="./activity4.php" id="presenxia" class="content">
          <h4>Activity 4</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, veritatis!</p>
        </a>
      </div>
    </main>
  </body>
</html>
