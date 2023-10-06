<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentID = $_POST["studentID"];
    $password = $_POST["password"];

    echo "$studentID, Thank you for submitting the form! This is your password: $password";
}
?>

<html>
<body>
    <h3>Part 3</h3>
    <p>
        3.HTML forms offer some basic protections, 
        but these are useless in thwarting a serious attacker.
        Demonstrate use of at least two of these basic form restrictions and 
        explain briefly why they offer no real protection against attack.
    </p>

    <form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
        StudentID: <input type="text" maxlength="8" name="studentID"><br>
        Password: <input type="password"  name="password"><br>
        <input type="submit" value="Submit">
    </form>

    <form action="2aSignInForm.php" style="display: inline-block;">
        <input type="submit" value="Part 2A & 2B" />
    </form>

    <form action="4PHPValidation.php" style="display: inline-block;">
        <input type="submit" value="Part 4" />
    </form>
    
</body>
</html>