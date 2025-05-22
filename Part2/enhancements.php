<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Enhancements">
    <meta name="keywords" content="PHP, HTML5, CSS">
    <meta name="author" content="TrueDigital">
    <title>Enhancements</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<header>
    <?php
        include 'inc_files/header.inc';
    ?>
</header>
<body>
<article>
    <h1>Manager EOI accessibility</h1>
    <p>
        When the manager is logged into the manager page (manage.php), they will be given full accessibility
        to the database. This will allow them to add, delete are sort the data base from the website.
    </p>
</article>
<article>
    <h1>Registration Page</h1>
    <p>
        When the user clicks on a link to the website, the first page they will see will be a login page.
        Beneath the login form, there is another option to register if that user does not own an account.
        If the user registers an account, the details will be stored in the database and the user will recieve
        a unique user ID.
    </p>
</article>
<article>
    <h1>Checking access to manage.php</h1>
    <p>
        The manager page (manage.php) is only accessible to the user admin. When the correct user name 
        and password is entered, the login process page (login_process.php) checks if the details match. 
        If the details do not match, than the function is skipped.
    </p>
</article>
<article>
    <h1>Login Attempts</h1>
    <p>
        When a user attempts to login, if they fail to provide the correct details the data base will add +1
        to and invisible counter. If this counter reaches 3, the user will be locked out for 30 seconds before
        attempting to login again. This is to prevent brute forcing and servers being overloaded with bot networks.
    </p>
</article>
</body>
    <?php
        include 'inc_files/footer.inc';
    ?>
</body>
</html>