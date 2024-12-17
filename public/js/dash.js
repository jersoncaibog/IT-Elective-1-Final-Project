document.addEventListener("DOMContentLoaded", () => {
    const presenxiaGithub = document.querySelector('#presenxia-github');
    const activitiesGithub = document.querySelector('#activities-github');    
    const presenxia = document.querySelector('#presenxia');
    const activities = document.querySelector('#activities');
    
    document.addEventListener('click', (e) => {
        
        if (presenxiaGithub.contains(e.target)) {
            window.open('https://github.com/jersoncaibog/Presenxia.git', '_blank')
            return
        }

        if (activitiesGithub.contains(e.target)) {
            window.open('https://github.com/jersoncaibog/IT-Elective-1-Final-Project.git', '_blank')
            return
        }

        if (presenxia.contains(e.target)){
            window.open('https://presenxia.vercel.app?referrer=portfolio', '_blank')
        }

        if (activities.contains(e.target)){
            window.open('/IT_Elective_1_Final_Project/app/activities.php', '_self')
        }
    })
    
    setInterval(() => {

        const dates = document.querySelectorAll('.date')

        // last updated time:
        const lastUpdateDate = '2024-12-18T00:06:30'
        const lastUpdate = new Date(new Date(lastUpdateDate).toLocaleString('en-US', {timeZone: 'Asia/Manila'}))
        const today = new Date(new Date().toLocaleString('en-US', {timeZone: 'Asia/Manila'}))
        let ms = today - lastUpdate
        let timeSinceUpdate
        let unit
    
        switch (true) {
            case ms > 1000 * 60 * 60 * 24 * 365: // Years
                unit = 'y';
                timeSinceUpdate = parseInt(ms / (1000 * 60 * 60 * 24 * 365));
                break;
            case ms > 1000 * 60 * 60 * 24 * 30: // Months (approximate, 30 days per month)
                unit = 'mo';
                timeSinceUpdate = parseInt(ms / (1000 * 60 * 60 * 24 * 30));
                break;
            case ms > 1000 * 60 * 60 * 24 * 7: // Weeks
                unit = 'w';
                timeSinceUpdate = parseInt(ms / (1000 * 60 * 60 * 24 * 7));
                break;
            case ms > 1000 * 60 * 60 * 24: // Days
                unit = 'd';
                timeSinceUpdate = parseInt(ms / (1000 * 60 * 60 * 24));
                break;
            case ms > 1000 * 60 * 60: // Hours
                unit = 'h';
                timeSinceUpdate = parseInt(ms / (1000 * 60 * 60));
                break;
            case ms > 1000 * 60: // Minutes
                unit = 'm';
                timeSinceUpdate = parseInt(ms / (1000 * 60));
                break;
            case ms > 999: // Seconds
                unit = 's';
                timeSinceUpdate = parseInt(ms / 1000);
                break;
        }
        
        if (timeSinceUpdate) {
            dates.forEach(date => {
                date.textContent = `Last updated ${timeSinceUpdate}${unit} ago`
            })
        }
    }, 1000)

});

