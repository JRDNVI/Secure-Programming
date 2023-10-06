<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if name is not empty and is numeric
    if(!empty($_POST['name'])) {
        if(!is_numeric($_POST['name'])) {
            echo "<h4>Please enter Numbers</h4>";
        }
    } else {
        echo "<h4>Please Enter a Student ID</h4>";
    }

    // Check if email is not empty and has valid format
    if (!empty($_POST["email"])) { 
        $email = $_POST["email"]; 
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
            echo "<h4>Invalid email format</h4>"; 
        }
    } else {
        echo "<h4>Email is required</h4>"; 
    } 

    // Check if date of birth is not empty and has valid format
    if(!empty($_POST['dob'])) {
        $date = $_POST['dob'];
        if (preg_match("/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/",$date)) {
            echo "<h4>This is a valid date.</h4>";
        } else {
            echo "<h4>This is not a valid date.</h4>";
        }
    }

    // Check if tags is not empty and remove any HTML tags
    if(!empty($_POST['tags'])) {
        echo strip_tags($_POST['tags']);
    } else {
        echo "Please Enter HTML tags";
    }
}
?> 

<html>
<body>
    <h3>Part 4</h3>
    <p>
        4.Now (re-)write a PHP script that processes a number of form elements, but this time with validation that 
        what is entered conforms with what is expected. Make sure that dangerous syntax is removed.
    </p>

    <form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
        StudentID: <input type="text" id="name" name="name"><br><br>
        Email: <input type="text" name="email"><br><br>
        HTML Tags: <input type="text" name="tags"><br><br>
        Date of Birth: <input type="text" name="dob"><br><br>
        Country: <input type="text" name="ss"><br><br>
        <input type="submit" value="Submit">
    </form><br>

    <form action="3formProtections.php" style="display: inline-block;">
        <input type="submit" value="Part 3"/>
    </form>

    <form action="5cookie.php" style="display: inline-block;">
        <input type="submit" value="Part 5"/>
    </form>
    
</body>
</html>