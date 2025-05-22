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
<header>
    <!-- HEADER SECTION -->
    <?php
        include 'inc_files/header.inc';
    ?>
  </header>
<body>
    <fieldset id="application">
    <fieldset id="details">
        <legend id="title">Details</legend>
        <form method="post" action="Part2/process_eoi.php">
            <p>
                <label for="jobtitles">Job Title</label>
                <select name="jobtitles" id="jobtitles" required>
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
                <label for="firstname">First Name: </label>
                <input type="text" name="firstname" id="firstname" pattern="[a-zA-Z]{0,20}"
                title="First name must be 20 letters or less" required>
            </p>
            <p>
                <label for="lastname">Last Name: </label>
                <input type="text" name="lastname" id="lastname" pattern="[a-zA-Z]{0,20}"
                title="Last name must be 20 letters or less" required>
            </p>
            <p>
                <label for="dob">Date of Birth: </label>
                <input type="text" name="dob" id="dob" placeholder="dd/mm/yyyy" pattern="(0[1-9]|[12][0-9]|3[01])/(0[1-9]|1[0-2])/\d{4}" required>
            </p>
            <p>
                <label for="genderlist">Gender:</label>
                <br>
                <label for="male">Male</label>
                <input type="radio" name="gender" id="male" value="male" required>
                <br>
                <label for="female">Female</label>
                <input type="radio" name="gender" id="female" value="female">
                <br>
                <label for="other">Other</label>
                <input type="radio" name="gender" id="other" value="other">
            </p>
        <legend id="title">Address</legend>
            <p>
                <label for="street">Street Address: </label>
                <input type="text" name="street" id="street" pattern="{0,40}"
                title="No longer than 40 characters" required>
            </p>
            <p>
                <label for="suburb">Suburb/Town: </label>
                <input type="text" name="suburb" id="suburb" pattern="{0,40}"
                title="No longer than 40 characters" required>
            </p>
            <p>
                <label for="state">State</label>
                <select name="state" id="state" required>
                    <option value="">Select State</option>
                    <option value="vic">VIC</option>
                    <option value="nsw">NSW</option>
                    <option value="qld">QLD</option>
                    <option value="nt">NT</option>
                    <option value="wa">WA</option>
                    <option value="sa">SA</option>
                    <option value="tas">TAS</option>
                    <option value="act">ACT</option>
                </select>
            </p>
            <p>
                <label for="postcode">Postcode: </label>
                <input type="text" name="postcode" id="postcode" pattern="{4}"
                title="Must be 4 numbers" required>
            </p>
        <legend id="title">Personal Details</legend>
            <p>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" 
                title="Please enter a valid email" required>
            </p>
            <p>
                <label for="phonenumber">Phone Number: </label>
                <input type="text" name="phonenumber" id="phonenumber" pattern="{10}"
                title="Please enter your phone number" required>
            </p>
        <legend id="title">Skills</legend>
            <p>
                <label for="networkdegree">
                <input type="checkbox" id="networkdegree" name="techskills" value="networkdegree" checked>Networking Degree</label>
                
                <label for="mathsdegree">
                <input type="checkbox" id="mathsdegree" name="techskills" value="mathsdegree">Mathematics/Statics Degree</label>
                
                <label for="csdegree">
                <input type="checkbox" id="csdegree" name="techskills" value="csdegree">Cybersecurity Degree</label>
                
                <label for="itdegree"><input type="checkbox" id="itdegree" name="techskills" value="itdegree">IT Degree</label>
                
                <label for="highschooldegree">
                <input type="checkbox" id="highschooldegree" name="techskills" value="highschooldegree">High School Diploma</label>
                
                <label for="dataexp">
                <input type="checkbox" id="dataexp" name="techskills" value="dataexp">Data Analysis Experience</label>
                
                <label for="firewallexp">
                <input type="checkbox" id="firewallexp" name="techskills" value="firewallexp">Firewall Management Experience</label>
                
                <label for="oopexp">
                <input type="checkbox" id="oopexp" name="techskills" value="oopexp">OOP Experience</label>
                
                <label for="comskills">
                <input type="checkbox" id="comskills" name="techskills" value="comskills">Communication Skills</label>
            </p>
            <p>
                <label for="otherskills">Other Skills: </label>
                <textarea id="otherskills" name="otherskills" rows="4" cols="40"
                placeholder="Tell us about your skills here, if already checked then type N/A" required></textarea>
            </p>
                <label for="Resume">Add resume here! (Optional)</label>
                <input type="file" id="fileupload" name="fileupload" accept=".pdf">
            </form>
    </fieldset>
<div class="application-buttons">
    <input type="submit" value="Apply" class="appbutton">
    <input type="reset" value="Reset" class="appbutton">
</div>
</fieldset>
    <!-- FOOTER SECTION -->
    <footer>
    <?php
        include 'inc_files/footer.inc';
    ?>
    </footer>     
</body>
</html>