<?php
    require_once 'settings.php';
    if ($conn) {
        $query = "SELECT * FROM eoi";
        $result = mysqli_query($conn, $query);
    } else {
        echo "<p> Connection failed. </p> " ;
    }
    function display_all_eois($result) {
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
?>