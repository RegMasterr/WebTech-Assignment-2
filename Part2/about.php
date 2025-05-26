<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="About TrueDigital - Our Team, Contributions, and Interests">
    <meta name="keywords" content="TrueDigital, About Us, Team, Contributions, Interests, Networking, Web Project">
    <meta name="author" content="Anas Al Azad, Dang Gia Bach Vu, Reegen Cleminson">
    <title>About Us - TrueDigital</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <?php include 'inc_files/header.inc'; ?>
    <main class="about-main">
        <h1 class="page-main-heading">About Us</h1>
        <section class="about-us-intro enhancement-card">
            <p class="enhancement-description">
                We’re True Digital — a team of young tech enthusiasts building our first web project: a networking company website. This uni project quickly turned into something we’re all proud of. We aim to take this idea beyond just a website and make it global one day. True Digital is all about smart design, solid code, and big ambition!
            </p>
        </section>

        <h1 class="page-main-heading">Our Contributions and Interests</h1>

        <section class="team-member-card">
            <div class="member-content">
                <img src="images/anas.png" alt="Anas Al Azad" class="member-photo">
                <div class="member-text">
                    <h2 class="member-title">Hey I'm Anas</h2>
                    <p class="member-contribution enhancement-description">
                        For this project, I built the home page for Part 1. I also designed the artwork and logos, and created the header and footer used across the site. In Part 2, I rebuilt the About and Apply pages. I created the EOI table and the process_eoi.php script to validate and store applications. I styled the entire website with a new consistent, user-friendly theme and tested it with all PHP code to ensure everything works smoothly.
                    </p>
                    <p class="member-interests-label enhancement-description">I am interested in:</p>
                    <div class="interest-capsules">
                        <span class="interest-capsule">Fortnite</span>
                        <span class="interest-capsule">Guitar</span>
                        <span class="interest-capsule">Basketball</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="team-member-card">
            <div class="member-content">
                <img src="images/bach.png" alt="Dang Gia Bach Vu" class="member-photo">
                <div class="member-text">
                    <h2 class="member-title">Hey I'm Bach</h2>
                    <p class="member-contribution enhancement-description">
                        For this project, I created the Job Descriptions page in Part 1. In Part 2, I built the jobs table and worked on jobs.php and manage.php. I made sure job listings load dynamically from the database and managers can query the EOI table to view applications.
                    </p>
                    <p class="member-interests-label enhancement-description">I am interested in:</p>
                    <div class="interest-capsules">
                        <span class="interest-capsule">Gambling</span>
                        <span class="interest-capsule">Games</span>
                        <span class="interest-capsule">Movies</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="team-member-card">
            <div class="member-content">
                <img src="images/reegan.png" alt="Reegen Cleminson" class="member-photo">
                <div class="member-text">
                    <h2 class="member-title">Hey I'm Reegan</h2>
                    <p class="member-contribution enhancement-description">
                        For this project, I built the Apply page for Part 1 and set up the project tools like GitHub, Jira, and compiled the final submission. In Part 2, I created the login and registration system with validation and access control, including lockout after multiple failed logins. I also made enhancements.php and helped with shared setup files like header/footer.inc and settings.php.
                    </p>
                    <p class="member-interests-label enhancement-description">I am interested in:</p>
                    <div class="interest-capsules">
                        <span class="interest-capsule">Game Development</span>
                        <span class="interest-capsule">Coding</span>
                        <span class="interest-capsule">Nature</span>
                    </div>
                </div>
            </section>
        </section>

        <section class="class-details-card enhancement-card">
            <h2 class="enhancement-title">Class Details</h2>
            <p class="enhancement-description">
                Our class is on Thursday at 10:30 AM.
            </p>
            <ul class="member-list enhancement-description">
                <li>Anas Al Azad (ID: 105694136)</li>
                <li>Dang Gia Bach Vu (ID: 105191365)</li>
                <li>Reegan Cleminson (ID: 105051016)</li>
            </ul>
        </section>

    </main>
<?php include 'inc_files/footer.inc'; ?>
    
</body>
</html>