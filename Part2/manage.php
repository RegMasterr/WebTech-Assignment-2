<?php
    require_once 'settings.php';
    if ($conn) {
        $query = "SELECT * FROM eoi";
        $result = mysqli_query($conn, $query);
    } else {
        echo "<p> Connection failed. </p> " ;
    }
    // Check if there are any results
    if ($result && mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>EOI Number</th><th>Job Ref</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Status</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['EOInumber'] . "</td>";
            echo "<td>" . $row['job_ref'] . "</td>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No EOIs found.</p>";
    }
    else {
    echo "<p>Connection failed.</p>";
}

mysqli_close($conn);
?>