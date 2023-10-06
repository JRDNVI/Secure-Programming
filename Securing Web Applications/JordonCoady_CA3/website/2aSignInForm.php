<?php
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set database credentials
    $servername = "localhost";
    $username = "jordonc";
    $password = "Lindaholly1";

    try {
        // Connect to database using PDO
        $conn = new PDO("mysql:host=$servername;dbname=spAssign03", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection to spAssign03 Successful" . "<br>";

        // Get username and password from form data
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Create a SQL query to retrieve user data
        $query = "SELECT * FROM 2a_userSignIn WHERE username='$username' AND password='$password'";

        echo "Query: $query<br><br>";

        // Execute the query and check if any rows were returned
        $result = $conn->query($query);
        if ($result->rowCount() > 0) {
            // If there are rows, loop through them and display the username and password
            foreach ($result as $row) {
                echo "Username: " . $row['username'] . "<br>";
                echo "Password: " . $row['password'] . "<br>";
                echo "Login successful!" . "<br><br>";
            }
        } else {
            // If no rows were returned, display an error message
            echo "Incorrect username or password" . "<br>";
        }
    } catch(PDOException $e) {
        // If there was an error connecting to the database, display the error message
        echo "Connection failed: " . $e->getMessage();
    }

    // Close the database connection
    $conn = null;
}
?>


<html>
<body>
<h3>Part 2 - A & B</h3>
    <p>
        2A.	Write a PHP script that processes data received from a HTML form and performs a database query 
        that depends on what the user enters. For example create a database of usernames and passwords and 
        write a login page than looks up the username and password to see if they exist in the database. 
        If doing this, make passwords invisible when entering them in the HTML form by using input type= "password"
    </p>
    <p>
        2B.	Make your script in part 2.a vulnerable to SQL injection (if it isn’t already) 
        and demonstrate this vulnerability using two different SQL injection attacks.
    </p>

    <button onclick="document.getElementById('username').value = '\' or \'\' =\''; document.getElementById('password').value = '\' or \'\' =\'';">' or '' ='</button>
    <button onclick="document.getElementById('username').value = '\' or \'1\' = \'1'; document.getElementById('password').value = '\' or \'1\' = \'1';">' or '1' = '1</button>
    <br><br>

    <form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
        Username: <input type="text" id="username" name="username"><br>
        Password: <input type="password" id="password" name="password"><br>
        <input type="submit" value="Submit">
    </form>

    <form action="1bGet.php" style="display: inline-block;">
        <input type="submit" value="Part 1B" />
    </form>

    <form action="3formProtections.php" style="display: inline-block;">
        <input type="submit" value="Part 3" />
    </form>

</body>
</html>


