<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: apply.php");
    exit();
}

require_once("settings.php");

function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

$job_ref = clean_input($_POST["job_ref"]);
$first_name = clean_input($_POST["first_name"]);
$last_name = clean_input($_POST["last_name"]);
$street = clean_input($_POST["street"]);
$suburb = clean_input($_POST["suburb"]);
$state = clean_input($_POST["state"]);
$postcode = clean_input($_POST["postcode"]);
$email = clean_input($_POST["email"]);
$phone = clean_input($_POST["phone"]);
$skill1 = isset($_POST["skill1"]) ? clean_input($_POST["skill1"]) : "";
$skill2 = isset($_POST["skill2"]) ? clean_input($_POST["skill2"]) : "";
$skill3 = isset($_POST["skill3"]) ? clean_input($_POST["skill3"]) : "";
$skill4 = isset($_POST["skill4"]) ? clean_input($_POST["skill4"]) : "";
$skill5 = isset($_POST["skill5"]) ? clean_input($_POST["skill5"]) : "";
$other_skills = clean_input($_POST["other_skills"]);

$errors = [];

if (empty($job_ref) || empty($first_name) || empty($last_name) || empty($email)) {
    $errors[] = "Required fields are missing.";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
}

if (!preg_match("/^\d{4}$/", $postcode)) {
    $errors[] = "Postcode must be 4 digits.";
}

if (count($errors) > 0) {
    echo "<h2>Form submission failed:</h2><ul>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul><a href='apply.php'>Back to Form</a>";
    exit();
}

$query = "INSERT INTO eoi 
(job_ref, first_name, last_name, street_address, suburb, state, postcode, email, phone, skill1, skill2, skill3, skill4, skill5, other_skills)
VALUES 
('$job_ref', '$first_name', '$last_name', '$street', '$suburb', '$state', '$postcode', '$email', '$phone', '$skill1', '$skill2', '$skill3', '$skill4', '$skill5', '$other_skills')";

if (mysqli_query($conn, $query)) {
    $eoi_id = mysqli_insert_id($conn);
    echo "<h2>Thank you for your application!</h2>";
    echo "<p>Your EOI Number is: <strong>$eoi_id</strong></p>";
    echo "<a href='index.php'>Return to Home</a>";
} else {
    echo "<p>Error: " . mysqli_error($conn) . "</p>";
}

mysqli_close($conn);
?>