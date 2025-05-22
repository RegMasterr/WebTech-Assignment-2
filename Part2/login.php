<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
<section id="loginpage">
    <form method="POST" action="login_process.php">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <input type="submit" value="login">
        
    </form>
    <form method="POST" action="register.php">
        <label for="register">Register</label>
        <input type="submit" value="register" id="register">
    </form>
</section>
</body>
</html>