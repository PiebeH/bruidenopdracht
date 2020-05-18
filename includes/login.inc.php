<?php
session_start();
if (isset($_POST['login-submit'])) {

    require 'config.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username) || empty($password)) {
        header("Location:../login.php?error=emptyfields");
        exit();
    }
        else {
            $stmt = $conn->prepare("SELECT username FROM gebruikers WHERE username= :username;");
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
           // $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->execute();
            $row= $stmt->fetch(PDO::FETCH_ASSOC);
            $pswCheck = password_verify($password, $row[':password']);
                if ($pswCheck == true) {
                    header("Location:../welcome.php?error=wrongpassword");
                    exit();
                } else if ($pswCheck == true) {
                    session_start();
                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['username'] = $row['username'];
                    header("Location:../homepage.php?login=succes");
                    exit();
                }


            else{
                header("Location:../welcome.php?loginerror");
                exit();
            }
        }


}
else {
    header("Location../welcome.php");
    exit();
}
