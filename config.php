<?php
$server= "localhost";
$username= "root";
$password= "";
$db= "bruidenopdrachtdb";


//Checkt of de connectie succesvol was
try{
$handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
$handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "connected";
} catch(PDOException $e){
    die("Oops. Something went wrong");
    $e->getMassage();
}


