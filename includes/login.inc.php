<?php
session_start();

if (isset($_POST['login-submit'])) {

    require 'config.php';

    $username = $_POST['username'];
    $password = $_POST['psw'];

    if (empty($username) || empty($password)) {
        header("Location:../welcome.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM gebruikers WHERE username=?;";
        $query = $conn->prepare($sql);
        if (!$query) {
            header("location: ../welcome.php?error=sqlerror");
            exit();
        } else {
            $stmt = $conn->prepare($sql);
            $stmt->bindParam('username', $username);
            $stmt->bindParam('psw', $password);
            $stmt->execute();
            $row = $stmt->fetch();
            if ($stmt->rowCount() > 0) {
                $pswCheck = password_verify($password, $row['psw']);
                if ($pswCheck == false) {
                    header("Location:../welcome.php?error=wrongpassword");
                    exit();
                } else if ($pswCheck == true) {
                  session_start();
                  $_SESSION['userID'] =$row['user_id'];
                  $_SESSION['usernme'] =$row['username'];
                  header("Location:../homepage.php?login=succes");
                  exit();
                }


            } else {
                header("Location:../welcome.php?error=nouser");
                exit();
            }
        }
    }

} else {
    header("Location../welcome.php");
    exit();
}
