<?php
session_start();
require_once("settings.php");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: apply.php");
    exit();
}

// Create table if not exists
$createTableQuery = "CREATE TABLE IF NOT EXISTS eoi (
  EOInumber INT AUTO_INCREMENT PRIMARY KEY,
  job_ref VARCHAR(10) NOT NULL,
  first_name VARCHAR(20) NOT NULL,
  last_name VARCHAR(20) NOT NULL,
  dob VARCHAR(10),
  gender VARCHAR(10),
  street_address VARCHAR(40) NOT NULL,
  suburb VARCHAR(40) NOT NULL,
  state ENUM('VIC','NSW','QLD','NT','WA','SA','TAS','ACT') NOT NULL,
  postcode CHAR(4) NOT NULL,
  email VARCHAR(100) NOT NULL,
  phone VARCHAR(12) NOT NULL,
  skill1 VARCHAR(50),
  skill2 VARCHAR(50),
  skill3 VARCHAR(50),
  skill4 VARCHAR(50),
  skill5 VARCHAR(50),
  other_skills TEXT NOT NULL,
  status ENUM('New','Current','Final') DEFAULT 'New'
)";
mysqli_query($conn, $createTableQuery);

// Sanitize input
function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Required Fields
$job_ref = clean_input($_POST["job_ref"]);
$first_name = clean_input($_POST["first_name"]);
$last_name = clean_input($_POST["last_name"]);
$dob = clean_input($_POST["dob"]);
$gender = clean_input($_POST["gender"]);
$street = clean_input($_POST["street"]);
$suburb = clean_input($_POST["suburb"]);
$state = strtoupper(clean_input($_POST["state"]));
$postcode = clean_input($_POST["postcode"]);
$email = clean_input($_POST["email"]);
$phone = clean_input($_POST["phone"]);
$other_skills = clean_input($_POST["other_skills"]);

$skills = isset($_POST["skills"]) ? $_POST["skills"] : [];
$skill1 = isset($skills[0]) ? $skills[0] : '';
$skill2 = isset($skills[1]) ? $skills[1] : '';
$skill3 = isset($skills[2]) ? $skills[2] : '';
$skill4 = isset($skills[3]) ? $skills[3] : '';
$skill5 = isset($skills[4]) ? $skills[4] : '';

// Server-side validation
$errors = [];

if (!preg_match("/^[a-zA-Z]{1,20}$/", $first_name)) {
    $errors[] = "First name must be up to 20 alphabetic characters.";
}

if (!preg_match("/^[a-zA-Z]{1,20}$/", $last_name)) {
    $errors[] = "Last name must be up to 20 alphabetic characters.";
}

if (!preg_match("/^\d{4}$/", $postcode)) {
    $errors[] = "Postcode must be exactly 4 digits.";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
}

if (!preg_match("/^[0-9 ]{8,12}$/", $phone)) {
    $errors[] = "Phone must be 8–12 digits or spaces.";
}

if (empty($other_skills)) {
    $errors[] = "Please fill in the 'Other Skills' field.";
}

if (count($errors) > 0) {
    echo "<h2>Form submission failed:</h2><ul>";
    foreach ($errors as $e) {
        echo "<li>$e</li>";
    }
    echo "</ul><a href='apply.php'>Return to form</a>";
    exit();
}

// Insert data
$insertQuery = "INSERT INTO eoi
(job_ref, first_name, last_name, dob, gender, street_address, suburb, state, postcode, email, phone,
 skill1, skill2, skill3, skill4, skill5, other_skills)
VALUES
('$job_ref', '$first_name', '$last_name', '$dob', '$gender', '$street', '$suburb', '$state', '$postcode',
 '$email', '$phone', '$skill1', '$skill2', '$skill3', '$skill4', '$skill5', '$other_skills')";

if (mysqli_query($conn, $insertQuery)) {
    $eoi_id = mysqli_insert_id($conn);
    echo "<h2>Application Submitted Successfully!</h2>";
    echo "<p>Your EOI Number is: <strong>$eoi_id</strong></p>";
    echo "<a href='index.php'>Return to Home</a>";
} else {
    echo "<p>Error submitting application: " . mysqli_error($conn) . "</p>";
}

mysqli_close($conn);
?>