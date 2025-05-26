<?php
    session_start();
    require_once("settings.php"); // Database connection settings: This file defines $host, $user, $pwd, $database and establishes $conn

    // Function to display EOIs
    function display_eois($result) {
        if ($result && mysqli_num_rows($result) > 0) {
            echo "<div class='eoi-table-container'>";
            echo "<table class='job-description eoi-table'>";
            echo "<thead><tr>";
            echo "<th>EOI No.</th><th>Job Ref</th><th>First Name</th><th>Last Name</th><th>DOB</th>";
            echo "<th>Gender</th><th>Street</th><th>Suburb</th><th>State</th><th>Postcode</th>";
            echo "<th>Email</th><th>Phone</th><th>Skill 1</th><th>Skill 2</th><th>Skill 3</th>";
            echo "<th>Skill 4</th><th>Skill 5</th><th>Other Skills</th><th>Status</th><th>Action</th>";
            echo "</tr></thead><tbody>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['EOInumber']) . "</td>";
                echo "<td>" . htmlspecialchars($row['job_ref']) . "</td>";
                echo "<td>" . htmlspecialchars($row['first_name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['last_name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['dob']) . "</td>";
                echo "<td>" . htmlspecialchars($row['gender']) . "</td>";
                echo "<td>" . htmlspecialchars($row['street_address']) . "</td>";
                echo "<td>" . htmlspecialchars($row['suburb']) . "</td>";
                echo "<td>" . htmlspecialchars($row['state']) . "</td>";
                echo "<td>" . htmlspecialchars($row['postcode']) . "</td>";
                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
                echo "<td>" . htmlspecialchars($row['skill1']) . "</td>";
                echo "<td>" . htmlspecialchars($row['skill2']) . "</td>";
                echo "<td>" . htmlspecialchars($row['skill3']) . "</td>";
                echo "<td>" . htmlspecialchars($row['skill4']) . "</td>";
                echo "<td>" . htmlspecialchars($row['skill5']) . "</td>";
                echo "<td>" . htmlspecialchars($row['other_skills']) . "</td>";
                echo "<td>" . htmlspecialchars($row['status']) . "</td>";
                echo "<td class='status-update-cell'>";
                    echo "<form method='post' action='' class='status-update-form'>";
                        echo "<input type='hidden' name='eoi_number' value='" . htmlspecialchars($row['EOInumber']) . "'>";
                        echo "<select name='new_status' class='status-select'>";
                            echo "<option value='New'" . (htmlspecialchars($row['status']) == 'New' ? ' selected' : '') . ">New</option>";
                            echo "<option value='Current'" . (htmlspecialchars($row['status']) == 'Current' ? ' selected' : '') . ">Current</option>";
                            echo "<option value='Final'" . (htmlspecialchars($row['status']) == 'Final' ? ' selected' : '') . ">Final</option>";
                        echo "</select>";
                        echo "<button type='submit' name='update_status' class='form-button small-button'>Update</button>";
                    echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</tbody></table>";
            echo "</div>";
        } else {
            echo "<p class='no-results'>No EOIs found for this query.</p>";
        }
    }

    $query_results_message = "";

    // IMPORTANT: The $conn variable is already established in settings.php and made available by require_once.
    // So, we just check if $conn is valid.
    if (!$conn) { // Check if connection failed from settings.php
        $query_results_message = "<p class='error-message'>Database connection failed: " . mysqli_connect_error() . "</p>";
    } else {
        // --- Process POST Requests (Actions) ---
        // Handle Status Update
        if (isset($_POST['update_status']) && isset($_POST['eoi_number']) && isset($_POST['new_status'])) {
            $eoi_number = mysqli_real_escape_string($conn, $_POST['eoi_number']);
            $new_status = mysqli_real_escape_string($conn, $_POST['new_status']);
            $query = "UPDATE eoi SET status = '$new_status' WHERE EOInumber = '$eoi_number'";
            $result = mysqli_query($conn, $query);
            if ($result) {
                $query_results_message = "<p class='success-message'>Status updated successfully for EOI number: $eoi_number</p>";
            } else {
                $query_results_message = "<p class='error-message'>Status update failed: " . mysqli_error($conn) . "</p>";
            }
        }
        
        // Handle EOI Deletion by Job Reference
        if (isset($_POST['delete_job_ref'])) {
            $delete_job_ref = mysqli_real_escape_string($conn, $_POST['delete_job_ref']);
            $query = "DELETE FROM eoi WHERE job_ref = '$delete_job_ref'";
            $result = mysqli_query($conn, $query);
            if ($result) {
                $affected_rows = mysqli_affected_rows($conn);
                if ($affected_rows > 0) {
                    $query_results_message = "<p class='success-message'>Successfully deleted $affected_rows EOI(s) for Job Reference: $delete_job_ref</p>";
                } else {
                    $query_results_message = "<p class='info-message'>No EOIs found for Job Reference: $delete_job_ref to delete.</p>";
                }
            } else {
                $query_results_message = "<p class='error-message'>Delete failed: " . mysqli_error($conn) . "</p>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage EOIs - TrueDigital</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <header>
    <div class="brand">
        <img src="images/logo.png" alt="TrueDigital Logo" id="logo">
        <div class="brand-text">
            <h1><em><strong>TrueDigital</strong></em></h1>
            <p class="tagline">Powering Your Digital World</p>
        </div>
    </div>

    <nav>
        <ul class="menu">
            <li><a href="index.php" class="menu-button">Logout</a></li>
        </ul>
    </nav>
    </header>

    <main class="manage-main">
        <h1 class="page-main-heading">Manage Job Applications (EOIs)</h1>

        <?php echo $query_results_message; // Display messages from actions ?>

        <section class="manage-card">
            <h2 class="manage-title">All Applications & Sorting Options</h2>
            <form method="post" action="" class="manage-form">
                <div class="form-group">
                    <label for="sort_field">Sort By:</label>
                    <select name="sort_field" id="sort_field">
                        <option value="EOInumber">EOI Number</option>
                        <option value="job_ref">Job Reference</option>
                        <option value="first_name">First Name</option>
                        <option value="last_name">Last Name</option>
                        <option value="dob">Date of Birth</option>
                        <option value="status">Status</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="sort_order">Order:</label>
                    <select name="sort_order" id="sort_order">
                        <option value="ASC">Ascending</option>
                        <option value="DESC">Descending</option>
                    </select>
                </div>
                <button type="submit" name="list_all" class="form-button">List All EOIs</button>
            </form>
        </section>

        <section class="manage-card">
            <h2 class="manage-title">Search Applications by Job Reference</h2>
            <form method="post" action="" class="manage-form">
                <div class="form-group">
                    <label for="job_ref">Enter Job Reference Number:</label>
                    <input type="text" id="job_ref" name="job_ref">
                </div>
                <button type="submit" name="search_job_ref" class="form-button">Search</button>
            </form>
        </section>

        <section class="manage-card">
            <h2 class="manage-title">Search Applications by Applicant Name</h2>
            <form method="post" action="" class="manage-form">
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" id="first_name" name="first_name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" id="last_name" name="last_name">
                </div>
                <button type="submit" name="search_by_name" class="form-button">Search by Name</button>
            </form>
        </section>

        <section class="manage-card">
            <h2 class="manage-title">Delete Applications by Job Reference</h2>
            <form method="post" action="" class="manage-form">
                <div class="form-group">
                    <label for="delete_job_ref">Enter Job Reference Number to Delete:</label>
                    <input type="text" id="delete_job_ref" name="delete_job_ref">
                </div>
                <button type="submit" name="delete_eois" class="form-button delete-button">Delete Applications</button>
            </form>
        </section>

        <section class="manage-results-section">
            <h2 class="manage-title">Query Results</h2>
            <?php
                if ($conn) { // Ensure connection is active before querying

                    $query_condition = ""; // Used for WHERE clause
                    $sort_order_clause = "ORDER BY EOInumber ASC"; // Default sort

                    // If "List All EOIs" button was clicked, update sorting
                    if (isset($_POST['list_all'])) {
                        $sort_field = mysqli_real_escape_string($conn, $_POST['sort_field'] ?? 'EOInumber');
                        $sort_order = mysqli_real_escape_string($conn, $_POST['sort_order'] ?? 'ASC');
                        $sort_order_clause = "ORDER BY $sort_field $sort_order";
                    }
                    
                    // If "Search by Job Reference" button was clicked
                    if (isset($_POST['search_job_ref']) && !empty($_POST['job_ref'])) {
                        $job_ref_search = mysqli_real_escape_string($conn, $_POST['job_ref']);
                        $query_condition = "WHERE job_ref = '$job_ref_search'";
                        echo "<p class='info-message'>Showing EOIs for Job Reference: <strong>" . htmlspecialchars($job_ref_search) . "</strong></p>";
                    } 
                    // If "Search by Name" button was clicked
                    elseif (isset($_POST['search_by_name'])) {
                        $first_name_search = mysqli_real_escape_string($conn, $_POST['first_name'] ?? '');
                        $last_name_search = mysqli_real_escape_string($conn, $_POST['last_name'] ?? '');

                        if (!empty($first_name_search) && !empty($last_name_search)) {
                            $query_condition = "WHERE first_name = '$first_name_search' AND last_name = '$last_name_search'";
                            echo "<p class='info-message'>Showing EOIs for Applicant: <strong>" . htmlspecialchars($first_name_search) . " " . htmlspecialchars($last_name_search) . "</strong></p>";
                        } elseif (!empty($first_name_search)) {
                            $query_condition = "WHERE first_name = '$first_name_search'";
                            echo "<p class='info-message'>Showing EOIs for Applicant (First Name): <strong>" . htmlspecialchars($first_name_search) . "</strong></p>";
                        } elseif (!empty($last_name_search)) {
                            $query_condition = "WHERE last_name = '$last_name_search'";
                            echo "<p class='info-message'>Showing EOIs for Applicant (Last Name): <strong>" . htmlspecialchars($last_name_search) . "</strong></p>";
                        } else {
                            // If search by name initiated but both fields are empty, display all.
                            echo "<p class='info-message'>No name criteria entered, listing all EOIs.</p>";
                        }
                    }
                    
                    // Construct and execute the main query for display
                    $main_query = "SELECT * FROM eoi $query_condition $sort_order_clause";
                    $result = mysqli_query($conn, $main_query);
                    
                    if (!$result) {
                        echo "<p class='error-message'>Database query failed: " . mysqli_error($conn) . "</p>";
                    }
                    display_eois($result);

                } else {
                    echo "<p class='error-message'>Database connection was not established.</p>";
                }
            ?>
        </section>
    </main>
</body>
</html>