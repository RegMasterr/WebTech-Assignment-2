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
 <?php include 'inc_files/header.inc'; ?>
    <main class="apply-main"> <h1 class="page-main-heading">Job Application Form</h1> <form method="post" action="process_eoi.php" novalidate="novalidate">
            <div class="form-container"> <fieldset id="application" class="form-fieldset"> <legend class="form-legend">Application Details</legend> <fieldset id="details" class="form-sub-fieldset">
                        <legend class="form-sub-legend">Personal Details</legend>
                        <p>
                            <label for="job_ref">Job Title</label>
                            <select name="job_ref" id="job_ref" required>
                                <option value="">Select Job</option>
                                <option value="na001">Network Administrator</option>
                                <option value="sd002">Software Developer</option>
                                <option value="da003">Data Analyst</option>
                                <option value="cs004">Cybersecurity Specialist</option>
                                <option value="it005">IT Support Technician</option>
                                <option value="cs006">Customer Service Representative</option>
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
                            <input type="radio" name="gender" value="Male" id="gender_male" required> <label for="gender_male">Male</label>
                            <input type="radio" name="gender" value="Female" id="gender_female"> <label for="gender_female">Female</label>
                            <input type="radio" name="gender" value="Other" id="gender_other"> <label for="gender_other">Other</label>
                        </p>
                    </fieldset>

                    <fieldset id="address" class="form-sub-fieldset">
                        <legend class="form-sub-legend">Address</legend>
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

                    <fieldset id="contact" class="form-sub-fieldset">
                        <legend class="form-sub-legend">Contact</legend>
                        <p>
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" required>
                        </p>
                        <p>
                            <label for="phone">Phone Number:</label>
                            <input type="text" name="phone" id="phone" required>
                        </p>
                    </fieldset>

                    <fieldset id="skills" class="form-sub-fieldset">
                        <legend class="form-sub-legend">Skills</legend>
                        <p>
                            <input type="checkbox" name="skills[]" value="Networking Degree" id="skill_networking"> <label for="skill_networking">Networking Degree</label><br>
                            <input type="checkbox" name="skills[]" value="Mathematics Degree" id="skill_math"> <label for="skill_math">Mathematics Degree</label><br>
                            <input type="checkbox" name="skills[]" value="Cybersecurity Degree" id="skill_cyber"> <label for="skill_cyber">Cybersecurity Degree</label><br>
                            <input type="checkbox" name="skills[]" value="IT Degree" id="skill_it"> <label for="skill_it">IT Degree</label><br>
                            <input type="checkbox" name="skills[]" value="High School Diploma" id="skill_diploma"> <label for="skill_diploma">High School Diploma</label><br>
                            <input type="checkbox" name="skills[]" value="Data Analysis" id="skill_data"> <label for="skill_data">Data Analysis Experience</label><br>
                            <input type="checkbox" name="skills[]" value="Firewall" id="skill_firewall"> <label for="skill_firewall">Firewall Management Experience</label><br>
                            <input type="checkbox" name="skills[]" value="OOP" id="skill_oop"> <label for="skill_oop">OOP Experience</label><br>
                            <input type="checkbox" name="skills[]" value="Communication" id="skill_communication"> <label for="skill_communication">Communication Skills</label>
                        </p>
                        <p>
                            <label for="other_skills">Other Skills:</label><br>
                            <textarea name="other_skills" id="other_skills" rows="4" cols="50" required></textarea>
                        </p>
                    </fieldset>

                    <div class="application-buttons">
                        <input type="submit" value="Apply" class="form-button">
                        <input type="reset" value="Reset" class="form-button reset-button">
                    </div>
                </fieldset>
            </div> </form>
    </main>
<?php include 'inc_files/footer.inc'; ?>
    
</body>
</html>