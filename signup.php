<?php
include_once 'includes/config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign up</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body>
<nav class="navtop">
</nav>
<div class="wrapper">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="username" placeholder="Username">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="psw" placeholder="Password">
        <input type="password" name="psw_repeat" placeholder="Repeat password">
    </form>
    <button type="button" class="cancelbtn">Cancel</button>
    <button type="submit" name="signup-submit" class="signupbtn">Sign Up</button>
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
</div>
</body>
</html>