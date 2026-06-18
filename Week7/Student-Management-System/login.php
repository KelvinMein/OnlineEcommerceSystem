<?php
session_start();
include 'db.php';

if(isset($_POST['login'])){

    $identifier = $_POST['identifier'];
    $password = $_POST['password'];

    $result = mysqli_query($conn,
        "SELECT * FROM users WHERE email='$identifier' OR fullname='$identifier'"
    );

    $user = mysqli_fetch_assoc($result);

    if($user && password_verify($password, $user['password'])){
        $_SESSION['user'] = $user['fullname'];
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid login credentials or user not registered!";
    }
}
?>