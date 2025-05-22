<?php
session_start();
require_once("settings.php");

if (
    isset($_POST['registerusername']) &&
    isset($_POST['registerpassword']) &&
    isset($_POST['registeremail'])
) {
    $username = trim($_POST['registerusername']);
    $password = trim($_POST['registerpassword']);
    $email = trim($_POST['registeremail']);

    // Simple validation (add more as needed)
    if ($username == "" || $password == "" || $email == "") {
        echo "All fields are required.";
        exit();
    }

    // Insert into database
    $query = "INSERT INTO user (username, password, email) VALUES ('$username', '$password', '$email')";
    if (mysqli_query($conn, $query)) {
        echo "Registration successful. <a href='login.php'>Login here</a>.";
        header("Location:login.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Invalid form submission.";
}
?>