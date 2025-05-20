<?php
    require_once 'settings.php';
    if ($conn) {
        $query = "SELECT * FROM jobs";
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);
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
            while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['job_title'] . "</td>";
            echo "<td>" . $row['job_description'] . "</td>";
            echo "<td>" . $row['salary_range'] . "</td>";
            echo "<td>" . $row['reports_to'] . "</td>";
            echo "<td>" . $row['responsibilities'] . "</td>";
            echo "<td>" . $row['qualifications'] . "</td>";
            echo "</tr>";
        }
        ?>
   <?php include 'inc_files/footer.inc'; ?>
</body>
</html>