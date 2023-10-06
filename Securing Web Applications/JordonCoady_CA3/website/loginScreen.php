<?php 
    session_start();
    echo "Session ID: " . session_id() . "<br>";
    echo "Session variable value: Username: " . $_SESSION["name"] . " Password: " . $_SESSION["pass"] . "<br><br>";
    if(isset($_POST["destroy"])) {
        session_destroy();
        header("Location: 6sessionVar.php");
        exit();
    }
?>

<html>
<body>

    <form method="post" style="display: inline-block;">
        <button type="submit" name="destroy" >Destroy Session</button>
    </form>

    <form action="5cookie.php" style="display: inline-block;">
        <input type="submit" value="Part 5"/>
    </form>

</body>
</html>