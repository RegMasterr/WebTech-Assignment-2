<h2>Search EOIs by Job Reference</h2>
<form method="post" action="">
    <label for="job_ref">Enter Job Reference Number:</label>
    <input type="text" id="job_ref" name="job_ref" required>
    <input type="submit" value="Search">
</form>

<?php
    require_once 'settings.php';
    if ($conn) {
        $query = "SELECT * FROM eoi";
        $result = mysqli_query($conn, $query);
        display_eois($result);
    } else {
        echo "<p> Connection failed. </p> " ;
    }
    function display_eois($result) {
    if ($result && mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>
            <th>EOInumber</th>
            <th>Job Ref</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>DOB</th>
            <th>Gender</th>
            <th>Street Address</th>
            <th>Suburb</th>
            <th>State</th>
            <th>Postcode</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Skill1</th>
            <th>Skill2</th>
            <th>Skill3</th>
            <th>Skill4</th>
            <th>Skill5</th>
            <th>Other Skills</th>
            <th>Status</th>
        </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['EOInumber'] . "</td>";
            echo "<td>" . $row['job_ref'] . "</td>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['dob'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['street_address'] . "</td>";
            echo "<td>" . $row['suburb'] . "</td>";
            echo "<td>" . $row['state'] . "</td>";
            echo "<td>" . $row['postcode'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['skill1'] . "</td>";
            echo "<td>" . $row['skill2'] . "</td>";
            echo "<td>" . $row['skill3'] . "</td>";
            echo "<td>" . $row['skill4'] . "</td>";
            echo "<td>" . $row['skill5'] . "</td>";
            echo "<td>" . $row['other_skills'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No EOIs found.</p>";
    }
}
    if ($conn) {
        if (isset($_POST['job_ref'])) {
            $job_ref = $_POST['job_ref'];
            $query = "SELECT * FROM eoi WHERE job_ref = '$job_ref'";
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "<h2>EOIs for Job Reference: $job_ref</h2>";
                display_eois($result);
            } else {
                echo "<p>Query failed: " . mysqli_error($conn) . "</p>";
            }
        }
    } else {
        echo "<p>Connection failed.</p>";
    }
?>
