<?php
// Check if the cookie exists
if(isset($_COOKIE['basic_cookie']) && isset($_COOKIE['secure_cookie'])) {
    // If both cookies exist, display their values
    echo "cookie value is: " . $_COOKIE['basic_cookie'] . "<br>";
    echo "cookie value is: " . $_COOKIE['secure_cookie'] . "<br>";
} else {
    // Cookies do not exist, so create a basic cookie and a secure cookie
    
    // Set a basic cookie with name 'basic_cookie' and value 'Hello, World!'
    // Expires after 30 days, accessible to all pages in the site
    $cookie_value = "Hello, World!";
    setcookie('basic_cookie', $cookie_value, time() + (86 * 30), "/");
    
    // Set a secure cookie thats Expires after 30 days, accessible only via HTTPS and HTTP protocol
    $secure_cookie_value = "Bobs secure cookie";
    setcookie('secure_cookie', $secure_cookie_value, time() + (86 * 30), null, null, true, true,);

    // Below are the security parameters that a cookie can be created with.
    // In my report each parameter is disccused in detail.
    // setcookie(name, value, expires_or_options, path, domain, secure, httponly)
    
    echo "Two cookies have been created.";
}


?>

<html>
<body>
    <h3>Part 5</h3>
    <p>
       5.Write short script(s) to demonstrate basic use of cookies – i.e. 
       if the cookie doesn’t already exist on the browser, create it. Otherwise 
       read its value. Comment on the security options (i.e. method parameters) when creating cookies.
    </p>
    <form action="4PHPValidation.php" style="display: inline-block;">
        <input type="submit" value="Part 4" />
    </form>
    <form action="6sessionVar.php" style="display: inline-block;">
        <input type="submit" value="Part 6" />
    </form>
</body>
</html>
