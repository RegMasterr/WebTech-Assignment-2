<h2>Search EOIs by Job Reference</h2>
<form method="post" action="">
    <label for="job_ref">Enter Job Reference Number:</label>
    <input type="text" id="job_ref" name="job_ref" required>
    <input type="submit" value="Search">
</form>
<h2>Search EOIs by Applicant Name</h2>
<form method="post" action="">
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name">
    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name">
    <input type="submit" value="Search by Name">
</form>
<h2>Delete EOIs by Job Reference</h2>
<form method="post" action="">
    <label for="delete_job_ref">Enter Job Reference Number to Delete:</label>
    <input type="text" id="delete_job_ref" name="delete_job_ref" required>
    <input type="submit" value="Delete EOIs">
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
            echo "<td>
                <form method='post' action=''>
                    <input type='hidden' name='eoi_number' value='" . $row['EOInumber'] . "'>
                    <select name='new_status'>
                        <option value='New'" . ($row['status'] == 'New' ? ' selected' : '') . ">New</option>
                        <option value='Current'" . ($row['status'] == 'Current' ? ' selected' : '') . ">Current</option>
                        <option value='Final'" . ($row['status'] == 'Final' ? ' selected' : '') . ">Final</option>
                    </select>
                    <input type='submit' name='update_status' value='Confirm Status'>
                </form>
            </td>"; #to change status
        }
        echo "</table>";
    } else {
        echo "<p>No EOIs found.</p>";
    }
}
    if ($conn) {
        if (isset($_POST['job_ref'])) { #job_ref search
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
        if (isset($_POST['first_name']) || isset($_POST['last_name'])) { #name search
        $first_name = $_POST['first_name'] ?? '';
        $last_name = $_POST['last_name'] ?? '';

        $where_clause = ''; #where clause to search by first name and/or last name
        if (!empty($first_name) && !empty($last_name)) {
            $where_clause = "WHERE first_name = '$first_name' AND last_name = '$last_name'";
        } elseif (!empty($first_name)) {
            $where_clause = "WHERE first_name = '$first_name'";
        } elseif (!empty($last_name)) {
            $where_clause = "WHERE last_name = '$last_name'";
        }

        $query = "SELECT * FROM eoi $where_clause";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "<h2>EOIs for Applicant: $first_name $last_name</h2>";
            display_eois($result);
        } else {
            echo "<p>Query failed: " . mysqli_error($conn) . "</p>";
        }
    }
    if (isset($_POST['delete_job_ref'])) { #delete applicants by job_ref
        $delete_job_ref = $_POST['delete_job_ref'];
        $query = "DELETE FROM eoi WHERE job_ref = '$delete_job_ref'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            $affected_rows = mysqli_affected_rows($conn);
            if ($affected_rows > 0) {
                echo "<p>Successfully deleted $affected_rows EOI(s) for Job Reference: $delete_job_ref</p>";
            } else {
                echo "<p>No EOIs found for Job Reference: $delete_job_ref</p>";
            }
        } else {
            echo "<p>Delete failed: " . mysqli_error($conn) . "</p>";
        }
    }
    if (isset($_POST['update_status']) && isset($_POST['eoi_number']) && isset($_POST['new_status'])) {
        $eoi_number = $_POST['eoi_number'];
        $new_status = $_POST['new_status'];
        $query = "UPDATE eoi SET status = '$new_status' WHERE EOInumber = '$eoi_number'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "<p>Status updated successfully for EOI number: $eoi_number</p>";
        } else {
            echo "<p>Status update failed: " . mysqli_error($conn) . "</p>";
        }
    }
} else {
        echo "<p>Connection failed.</p>";
    }
?>
