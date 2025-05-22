<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Applications">
    <meta name="keywords" content="PHP, HTML5, CSS">
    <meta name="author" content="TrueDigital">
    <title>Applications</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <!-- HEADER SECTION -->
    <header>
        <?php include 'inc_files/header.inc'; ?>
    </header>

    <form method="post" action="process_eoi.php" novalidate="novalidate">
        <fieldset id="application">
            <legend id="title">Application Form</legend>

            <fieldset id="details">
                <legend>Details</legend>
                <p>
                    <label for="job_ref">Job Title</label>
                    <select name="job_ref" id="job_ref" required>
                        <option value="">Select Job</option>
                        <option value="na001">Network Administrator</option>
                        <option value="sd002">Software Developer</option>
                        <option value="da003">Data Analyst</option>
                        <option value="cs004">Cybersecurity Specialist</option>
                        <option value="it005">IT Support Technician</option>
                        <option value="cs006">Customer Service</option>
                    </select>
                </p>
                <p>
                    <label for="first_name">First Name:</label>
                    <input type="text" name="first_name" id="first_name" maxlength="20" required>
                </p>
                <p>
                    <label for="last_name">Last Name:</label>
                    <input type="text" name="last_name" id="last_name" maxlength="20" required>
                </p>
                <p>
                    <label for="dob">Date of Birth:</label>
                    <input type="text" name="dob" id="dob" placeholder="dd/mm/yyyy" required>
                </p>
                <p>
                    Gender:
                    <input type="radio" name="gender" value="Male" required> Male
                    <input type="radio" name="gender" value="Female"> Female
                    <input type="radio" name="gender" value="Other"> Other
                </p>
            </fieldset>

            <fieldset id="address">
                <legend>Address</legend>
                <p>
                    <label for="street">Street Address:</label>
                    <input type="text" name="street" id="street" maxlength="40" required>
                </p>
                <p>
                    <label for="suburb">Suburb/Town:</label>
                    <input type="text" name="suburb" id="suburb" maxlength="40" required>
                </p>
                <p>
                    <label for="state">State:</label>
                    <select name="state" id="state" required>
                        <option value="">Select State</option>
                        <option value="VIC">VIC</option>
                        <option value="NSW">NSW</option>
                        <option value="QLD">QLD</option>
                        <option value="NT">NT</option>
                        <option value="WA">WA</option>
                        <option value="SA">SA</option>
                        <option value="TAS">TAS</option>
                        <option value="ACT">ACT</option>
                    </select>
                </p>
                <p>
                    <label for="postcode">Postcode:</label>
                    <input type="text" name="postcode" id="postcode" maxlength="4" required>
                </p>
            </fieldset>

            <fieldset id="contact">
                <legend>Contact</legend>
                <p>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                </p>
                <p>
                    <label for="phone">Phone Number:</label>
                    <input type="text" name="phone" id="phone" required>
                </p>
            </fieldset>

            <fieldset id="skills">
                <legend>Skills</legend>
                <p>
                    <input type="checkbox" name="skills[]" value="Networking Degree"> Networking Degree<br>
                    <input type="checkbox" name="skills[]" value="Mathematics Degree"> Mathematics Degree<br>
                    <input type="checkbox" name="skills[]" value="Cybersecurity Degree"> Cybersecurity Degree<br>
                    <input type="checkbox" name="skills[]" value="IT Degree"> IT Degree<br>
                    <input type="checkbox" name="skills[]" value="High School Diploma"> High School Diploma<br>
                    <input type="checkbox" name="skills[]" value="Data Analysis"> Data Analysis Experience<br>
                    <input type="checkbox" name="skills[]" value="Firewall"> Firewall Management Experience<br>
                    <input type="checkbox" name="skills[]" value="OOP"> OOP Experience<br>
                    <input type="checkbox" name="skills[]" value="Communication"> Communication Skills
                </p>
                <p>
                    <label for="other_skills">Other Skills:</label><br>
                    <textarea name="other_skills" id="other_skills" rows="4" cols="50" required></textarea>
                </p>
            </fieldset>

            <div class="application-buttons">
                <input type="submit" value="Apply" class="appbutton">
                <input type="reset" value="Reset" class="appbutton">
            </div>
        </fieldset>
    </form>

    <!-- FOOTER SECTION -->
    <footer>
        <?php include 'inc_files/footer.inc'; ?>
    </footer>
</body>
</html>
