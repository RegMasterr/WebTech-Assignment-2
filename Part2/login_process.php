<?php
session_start();
require_once("settings.php");

// Check if user is locked out
if (isset($_SESSION['lockout_time']) && time() < $_SESSION['lockout_time']) {
    $remaining = $_SESSION['lockout_time'] - time();
    echo "Too many failed attempts. Please try again in $remaining seconds.";
    exit();
}

if (isset($_POST['username'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' AND email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($user = mysqli_fetch_assoc($result)) {
        $_SESSION['username'] = $user['username'];
        
            if ($user ['username'] ==  'admin' && $password == 'TrueDigital') {
                header("Location:manage.php");
                exit();
            } else {
                unset($_SESSION['login_attempts']);
                unset($_SESSION['lockout_time']);
                header("Location:index.php");
            }
        exit();
    } else {
        // Increment login attempts
        if (!isset($_SESSION['login_attempts'])) {
            $_SESSION['login_attempts'] = 1;
        } else {
            $_SESSION['login_attempts']++;
        }

        if ($_SESSION['login_attempts'] >= 3) {
            $_SESSION['lockout_time'] = time() + 30; // 30 seconds lockout
            echo "Too many failed attempts. Please try again in 30 seconds.";
        } else {
            echo "Invalid username, password or email";
        }
        exit();
    }
}
?>