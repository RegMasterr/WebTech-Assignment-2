<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login or Register - TrueDigital</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <?php include 'inc_files/header.inc'; ?>
    <main class="login-main">
        <h1 class="page-main-heading">Account Access</h1>

        <div class="login-container">
            <section class="login-card">
                <h2 class="login-title">Login</h2>
                <form method="POST" action="login_process.php">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>

                    <button type="submit" class="form-button login-button">Login</button>
                </form>
            </section>

            <section class="register-card">
                <h2 class="login-title">Don't have an account?</h2>
                <form method="POST" action="register.php">
                    <button type="submit" class="form-button register-button">Register Now</button>
                </form>
            </section>
        </div>
    </main>
<?php include 'inc_files/footer.inc'; ?>
</body>
</html>