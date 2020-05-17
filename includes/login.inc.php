<?php
session_start();
if (isset($_POST['login-submit'])) {

    require 'config.php';
    $username = $_POST['username'];
    $password = $_POST['psw'];
    if (empty($username) || empty($password)) {
        header("Location:../login.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM gebruikers WHERE username = :username  AND password = :psw;";
        $stmt = $conn->prepare($sql);
        if (empty($username)){
            header("location: ../welcome.php?error=sqlerror");
            exit();
        }
        else {
            $query = "SELECT * FROM gebruikers WHERE username = ?  AND password = ?;";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':username',$username , PDO::PARAM_STR);
            $stmt->bindParam(':psw', $password, PDO::PARAM_STR);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                $pswCheck = password_verify($password, $row['password']);
                if ($pswCheck == false) {
                    header("Location:../welcome.php?error=wrongpassword");
                    exit();
                } else if ($pswCheck == true) {
                    session_start();
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['psw'] = $row['password'];
                    header("Location:../homepage.php?login=succes");
                    exit();
                }


            }
            else {
                header("Location:../welcome.php?error=nouser");
                exit();}
        }
    }

}
else {
    header("Location../welcome.php");
    exit();
}
