<?php
    require_once 'settings.php';
    if ($conn) {
        $query = "SELECT * FROM jobs";
        $result = mysqli_query($conn, $query);
    } else {
        echo "<p> Connection failed. </p> " ;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs</title>
</head>
<body>
   <?php include 'inc_files/header.inc'; ?>
    <?php
    echo'<h1 class="job-maintitle">Available Positions:</h1>
    <aside class="recruitment-info">
        <h3>Why Join TrueDigital?</h3>
        <p>At TrueDigital, we value innovation and teamwork. Our hiring process is simple: apply online, complete a short assessment, and interview with our team. Join us to power the digital future!</p>
    </aside>';
    // Loop through each job record and echo HTML structure
    while ($job = mysqli_fetch_assoc($result)) {
        // Section header (e.g., "Network Administrator (NA001)")
        echo '<section>';
        echo '<h2 class="job-title">' . htmlspecialchars($job['job_title']) . '</h2>';

        // Open table
        echo '<table class="job-description">';

        // "Job Description" row
        echo '<tr>';
        echo '<th>Job Description</th>';
        echo '<td>' . htmlspecialchars($job['job_description']) . '</td>';
        echo '</tr>';

        // "Salary Range" row
        echo '<tr>';
        echo '<th>Salary Range</th>';
        echo '<td>' . htmlspecialchars($job['salary_range']) . '</td>';
        echo '</tr>';

        // "Reports to" row
        echo '<tr>';
        echo '<th>Reports to</th>';
        echo '<td>' . htmlspecialchars($job['reports_to']) . '</td>';
        echo '</tr>';

        // "Key Responsibilities row 
        echo '<tr>';
        echo '<th>Key Responsibilities</th>';
        echo '<td><ol>' . $job['responsibilities'] . '</ol></td>';
        echo '</tr>';

        // "Required Qualifications" row (with unordered list)
        echo '<tr>';
        echo '<th>Required Qualifications</th>';
        echo '<td><ul>' . $job['qualifications'] . '</ul></td>';
        echo '</tr>';

        // Close table and section
        echo '</table>';
        echo '<a href="apply.php" class="apply-link">Apply Now</a>';
        echo '</section>';
    }   
    mysqli_close($conn);
    ?>
   <?php include 'inc_files/footer.inc';?>
</body>
</html>