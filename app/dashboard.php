<?php session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jerson</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../public/styles/index.css"">
    <link rel="stylesheet" href="../public/styles/globals.css">
    <link rel="stylesheet" href="../public/styles/dashboard.css">

    <!-- JavaScript -->
    <script src="../public/js/dash.js" defer></script>
</head>
<body>

    <?php include "../components/dashboardNav.php" ?>
    
    <main>
        <div class="content-container">
            <div id="presenxia" class="content">
                <div class="head">
                    <img class="icon" src="../public/svg/presenxia.svg" alt="presenxia logo">
                    <div class="title-container">
                        <h3 class="title">Presenxia</h3>
                        <p class="url">https://presenxia.vercel.app</p>
                    </div>
                </div>
                <div class="info">
                    <div href="" class="github" id="presenxia-github">
                        <img src="../public/svg/github.svg" alt="github icon">
                        <span>jersoncaibog/Presenxia</span>
                    </div>
                    <span class="date"></span>
                </div>
            </div>
            <!-- <a href="./activities.php" class="content" target="_blank"> -->
            <div id="activities" class="content">
                <div class="head">
                    <img class="icon book" src="../public/svg/book.svg" alt="presenxia logo">
                    <div class="title-container">
                        <h3 class="title">Activities</h3>
                        <p class="url">app/activities.php</p>
                    </div>
                </div>
                <div class="info">
                    <div class="github" id="activities-github">
                        <img src="../public/svg/github.svg" alt="github icon">
                        <span>jersoncaibog/IT-Elective-1-Final-Project</span>
                    </div>
                    <span class="date"></span>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
