<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jerson.</title>
    <link rel="stylesheet" href="../public/styles/index.css"">
    <link rel="stylesheet" href="../public/styles/globals.css">
    <link rel="stylesheet" href="../public/styles/about.css">
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
        <aside class="">
            <!-- <span>jersoncaibog0423@gmail.com</span> -->
        </aside>
        
        <div class="container">
            <div class="intro sr">
                <h1>Hi! It's Jerson.</h1>
                <p>A third-year IT student by day and an aspiring Full-Stack Web Developer by passion. I love bringing ideas to life through sleek, responsive web apps. Whether it’s solving tough problems, collaborating with a team, or crafting innovative digital solutions, I’m all about making tech work smarter (and look cooler) for everyone!</p>
            </div>
            <div class="image sd">
                <img src="../public/images/profile.jpg" alt="profile picture">
            </div>
            <div class="role">
                Full-Stack<br/>Developer
            </div>
            <div class="name">
                <span>
                    JERSON<br/>DE REAL
                </span>
            </div>
            <div class="quote">
                "The best way to predict the future is to invent it."
            </div>
            <div class="skills su">
                <h1>Skills</h1>
                <div>
                    <img src="../public/svg/nextjs.svg" alt="">
                    <img src="../public/svg/reactjs.svg" alt="">
                    <img src="../public/svg/tailwind.svg" alt="">
                    <img src="../public/svg/supabase.svg" alt="">
                    <img src="../public/svg/html.svg" alt="">
                    <img src="../public/svg/css.svg" alt="">
                    <img src="../public/svg/javascript.svg" alt="">
                    <img src="../public/svg/php.svg" alt="">
                    <img src="../public/svg/github.svg" alt="">
                    <img src="../public/svg/express.svg" alt="">
                    <img src="../public/svg/prisma.svg" alt="">
                    <img src="../public/svg/nodejs.svg" alt="">
                    <img src="../public/svg/git.svg" alt="">
                    <img src="../public/svg/mongodb.svg" alt="">
                    <img src="../public/svg/csharp.svg" alt="">
                    <img src="../public/svg/java.svg" alt="">
                    <img src="../public/svg/figma.svg" alt="">
                    <img src="../public/svg/arduino.svg" alt="">
                    <img src="../public/svg/mysql.svg" alt="">
                    <!-- <img src="../public/svg/nodejs.svg" alt=""> -->
                </div>
            </div>
            <div class="history sl">
                <h1>Education</h1>
                <div>
                    <p>Eastern Samar State University - Guiuan Campus</p>
                    <p>Bachelor of Science in Information Technology</p>
                    <p>2022 - present</p>
                    <p>GPA: 1.48</p>
                </div>
                <a>Certificates <img src="../public/svg/external-link.svg" alt=">"></a>
                <!-- <div>
                    <h1>Certifications & Achievements</h1>
                    <div>
                        <ul>
                            <li>Webpage Design Competition Winner</li>
                            <li>Programming Competition Winner</li>
                            <li>Web Development 101 Certification</li>
                            <li>Next.js Certification</li>
                            <li>Regional Representative (EVCO 2024)</li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>

        <aside class="sl">
            <a href="https://www.facebook.com/jerson.dereal.caibog/" target="_blank"><img src="../public/svg/facebook-w.svg" alt="facebook"></a>
            <a href="https://www.instagram.com/jersondereal/" target="_blank" class="instagram"><img src="../public/svg/instagram-w.svg" alt="instagram"></a>
            <a href="https://github.com/jersoncaibog" target="_blank"><img src="../public/svg/github.svg" alt="github"></a>
            <a href="https://www.linkedin.com/in/jerson-caibog-182278261/" target="_blank"><img src="../public/svg/linkedin-w.svg" alt="linkedin"></a>
        </aside>
    </main>
        
</body>
</html>
