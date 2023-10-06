<?php
    session_start();

    if(isset($_SESSION["name"]) && isset($_SESSION["pass"])) {
        // Redirect the user since they are already logged in
        header("Location: loginScreen.php");
        exit;   
    }

    if($_POST['username'] == "bob" && $_POST['password'] == "pass") {
        $_SESSION["name"] = "bob";
        $_SESSION["pass"] = "pass";
        header("Location: loginScreen.php");
        exit;
    }

//<script>var sessionID = document.cookie.replace(/(?:(?:^|.*;\s*)PHPSESSID\s*\=\s*([^;]*).*$)|^.*$/, "$1");alert("Session ID: " + sessionID);</script>

?>
<html>
<body>
    <h3>Part 6</h3>
    <p>
        6.Write short script(s) to demonstrate basic use of session variables – i.e. create session, 
        set session variables, read session variables, destroy session. Find the session ID. Use this 
        to demonstrate a session hijacking attack (i.e. start session on one browser and continue on another).
    </p>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Username: <input type="text" id="username" name="username"><br><br>
        Password: <input type="text" id="password" name="password"><br>
        <input type="submit" value="Submit">
    </form>

    <form action="5cookie.php" style="display: inline-block;">
        <input type="submit" value="Part 5" />
    </form>

</body>
<html>