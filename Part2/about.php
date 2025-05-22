<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="About">
    <meta name="keywords" content="PHP, HTML5, CSS">
    <meta name="author" content="TrueDigital">
    <title>About</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<!-- header nav bar -->
<header>
    <?php
        include 'inc_files/header.inc';
    ?>
</header>

<!-- about company -->
<br>
<div class="box-section">
    <div class="box about-company">
        <h1>About Our Company</h1>
        <p>
            True Digital is a leading technology firm dedicated to innovation and excellence.
            We offer competitive salaries, comprehensive benefits, and opportunities for
            professional growth. Join our team and be part of a dynamic and collaborative
            work environment.
        </p>
        <br>
    </div>
</div>

<!-- group members -->
<div class="box-section">
    <div class="box about-group">

        <h2>True Digital (Thursday 10:30)</h2>
        <ul>
            <li>Reegen Cleminson <strong>ID 0411593777</strong></li>
            <li>Anas Al Azad <strong>ID 0414434013</strong></li>
            <li>Dang Gia Bach Vu <strong>ID 0433162792</strong></li>
        </ul>
        <br>
    </div>
</div>

<div class="box-section">
    <!-- contributions -->
    <div class="contributions box">
        <h2>Contributions</h2>
        <dl>
            <dt>Reegen</dt>
            <dd>Application and About Pages</dd>
        
            <dt>Anas</dt>
            <dd>Home Page</dd>
        
            <dt>Bach</dt>
            <dd>Jobs Page</dd>
        
        </dl>
    </div>

    <!-- interests -->
    <div class="interests box">
        <h2>Our Interests</h2>
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>Reegan</th>
                <th>Anas</th>
                <th>Bach</th>
            </tr>
        
            <tr>
                <td>Game Development</td>
                <td>Sketching</td>
                <td>Gambling</td>
            </tr>
        
            <tr>
                <td>Coding</td>
                <td>Guitar</td>
                <td>Movies</td>
            </tr>
        
            <tr>
                <td>Nature</td>
                <td>Skateboarding</td>
                <td>Games</td>
            </tr>
        </table>
    </div>
</div>
<br>
<!-- footer links and info -->
    <?php
        include 'inc_files/footer.inc';
    ?>
</body>
</html>