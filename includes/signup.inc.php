<?php
//Kijkt of de gebruiker op de signup-button heeft geklikt

if (isset($_POST['signup-submit'])) {

    require 'config.php';
//haalt ingevoerde data
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['psw_repeat'];
//checkt of er een leeg veld is
    if (empty($name) || empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
        header("location: ../signup.php?error=emptyfields&name" . $name . "&email=" . $email);
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("location: ../signup.php?error=invalidmailusername");
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location: ../signup.php?error=invalidmail&name" . $name);
        exit();
    } else if ($password !== $passwordRepeat) {
        header("location: ../signup.php?error=passwordcheck&name . $name . &email= . $email");
        exit();
    } else {
        $hashedpsw = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO gebruikers (name,username,email,password) VALUES(?, ?, ?, ?)";
        $query = $conn->prepare($sql);
        $query->execute(array($name, $username, $email, $hashedpsw));
        header("location: ../homepage.php?signup=succes");
        exit();
    }
}




