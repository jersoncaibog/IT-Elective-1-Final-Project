<link rel="stylesheet" href="../public/styles/navbar.css">

<header>
    <div class="logo">
        <img src="../public/svg/logo.svg" alt="logo">
        <h1>Jerson.</h1>
    </div>

    <nav>
        <ul class="nav-ul">
            <li id="home" class="nav-item"><a href="../app/index.php">Home</a></li>
            <li id="about" class="nav-item"><a href="../app/about.php">About Me</a></li>
            <li class="dropdown">
                <a class="nav-activities" href="../app/activities.php">
                    <div>
                        My Activities 
                        <div class="down-arrow">
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </a>
                <ul class="dropdown-content">
                    <div class="inner-container">
                        <li><a href="activity1.php">Activity 1</a></li>
                        <li><a href="activity2.php">Activity 2</a></li>
                        <li><a href="activity3.php">Activity 3</a></li>
                        <li><a href="activity4.php">Activity 4</a></li>
                    </div>
                </ul>
            </li>
        </ul>
    </nav>
</header>

<script>
    const pathname = window.location.pathname;
    const home = document.getElementById('home');
    const about = document.getElementById('about');
    const activities = document.querySelector('.nav-activities');

    switch (pathname) {
        case '/IT_Elective_1_Final_Project/app/index.php':
            home.style.borderBottom = '1px solid white'
            home.children[0].style.color = '#FFFFFF';
            break;
            
        case '/IT_Elective_1_Final_Project/app/about.php':
            about.style.borderBottom = '1px solid white'
            about.children[0].style.color = '#FFFFFF';
            break;
        case '/IT_Elective_1_Final_Project/app/activities.php':
            activities.style.borderBottom = '1px solid white'
            activities.children[0].style.color = '#FFFFFF';
            break;
    }
</script>