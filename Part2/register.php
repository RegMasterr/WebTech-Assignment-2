<?php
    session_start();
    require_once("settings.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - TrueDigital</title>
    <link rel="stylesheet" href="styles/styles.css"> </head>
<body>
        <?php include 'inc_files/header.inc'; ?>

    <main class="login-main"> <h1 class="page-main-heading">Create Account</h1> <div class="login-container"> <section class="login-card"> <h2 class="login-title">New User Registration</h2> <form method="POST" action="register_process.php">
                    <div class="form-group">
                        <label for="registerusername">Username</label>
                        <input type="text" name="registerusername" id="registerusername" required>
                    </div>

                    <div class="form-group">
                        <label for="registeremail">Email</label>
                        <input type="email" name="registeremail" id="registeremail" required>
                    </div>

                    <div class="form-group">
                        <label for="registerpassword">Password</label>
                        <input type="password" name="registerpassword" id="registerpassword" required>
                    </div>

                    <button type="submit" class="form-button register-submit-button">Register</button> </form>
            </section>
        </div>
    </main>

    <?php include 'inc_files/footer.inc'; ?>
</body>
</html>