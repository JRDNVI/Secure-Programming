<?php
// Check if the request method is GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Get the values of the input fields from the form using the $_GET superglobal
    $name = $_GET["name"];
    $email = $_GET["email"];
    $message = $_GET["message"];

    echo "Thank you for submitting the form, $name";
    // I have disscused which method POST or GET is better and what is different about them in my report.
}
?>

<html>
<body>
    <h3>Part 1 - B</h3>
    <p>
        1B. Repeat part 1.a using a HTTP GET request instead of POST. Comment briefly 
        in your report on what is different and suggest which is better.
    </P>

    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name"><br><br>
        Email: <input type="email" name="email"><br><br>
        Message: <textarea name="message"></textarea><br><br>
        <input type="submit" value="Submit">
    </form><br>

    <form action="1aPost.php" style="display: inline-block;">
        <input type="submit" value="Part 1A & 1C" />
    </form>

    <form action="2aSignInForm.php" style="display: inline-block;">
        <input type="submit" value="Part 2A"/>
    </form>
</body>
</html>