<?php
//Kijkt of de gebruiker op de signup-button heeft geklikt
if(isset($_POST['signup-submit'])){

    require 'config.php';
//haalt ingevoerde data
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $passwordRepeat = $_POST['psw_repeat'];
//checkt of er een leeg veld is
    if (empty($name) || empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){


    }
}