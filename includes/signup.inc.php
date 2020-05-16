<?php
//Kijkt of de gebruiker op de signup-button heeft geklikt
if (isset($_POST['signup-submit'])) {

    require 'config.php';
//haalt ingevoerde data
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
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
    } //search pattern
    else if (preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("location: ../signup.php?error=invalidusername&email" . $email);
        exit();
    } else if ($password !== $passwordRepeat) {
        header("location: ../signup.php?error=passwordcheck&name . $name . &email= . $email");
        exit();
    }
    else{
        $data = [
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'password'=> $password,
        ];
        $sql = "INSERT INTO gebruikers (name, username, email, password) VALUES(?, ?, ?, ?)";


//Prepare our statement using the SQL query.
        $statement = $conn->prepare($sql);
//Bind our values to our parameters (we called them :make and :model).
        $statement->bindValue('name', '?');
        $statement->bindValue('username', '?');
        $statement->bindValue('email', '?');
        $statement->bindValue('password', '?');
//Execute the statement and insert our values.
        $inserted = $statement->execute();
//Because PDOStatement::execute returns a TRUE or FALSE value,
//we can easily check to see if our insert was successful.
        if(!$inserted){
           header("Location../signup.php?error=sqlerror");
           exit();
        }
        
        $statement->execute();
    }
}




