<?php
    session_start();
    require_once("settings.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
<section id="registerpage">
    <form method="POST" action="register_process.php">
        <label for="username">Username</label>
        <input type="text" name="registerusername" id="registerusername">

        <label for="registerpassword">Password</label>
        <input type="password" name="registerpassword" id="registerpassword">

        <label for="registeremail">Email</label>
        <input type="email" name="registeremail" id="registeremail">

        <input type="submit" value="register">
    </form>
</section>
</body>
</html>