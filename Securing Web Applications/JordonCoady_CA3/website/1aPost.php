<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    echo "$name, Thank you for submitting the form!";
}
?>

<html>
<body>
    <h3>Part 1 - A & C</h3>
    <p>
        1A. Write a PHP script that processes data received from a HTML 
        form using a HTTP POST request. The HTML form may be in a .php or 
        a .html file. You may wish to include the form and its processing 
        within the same PHP page (this is optional). Try to minimise hard coding of filenames and paths
    </p>
    <p>
        1C. Make your script in part 1.a vulnerable to Cross Site Scripting (if it 
        is not already) and demonstrate this vulnerability using basic attack syntax.
    </p>
    <button onclick="document.getElementById('name').value = '<script>alert(\'XSS Attack!\');</script>'">Demo XSS</button>
    <br><br>

    <form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
        Name: <input type="text" id="name" name="name"><br><br>
        Email: <input type="email" name="email"><br><br>
        Message: <textarea name="message"></textarea><br><br>
        <input type="submit" value="Submit">
    </form><br>
    
    <form action="1bGet.php">
        <input type="submit" value="Part 1B"/>
    </form>
</body>
</html>