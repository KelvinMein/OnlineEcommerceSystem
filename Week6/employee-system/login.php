<?php
session_start();
include 'db.php';

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $result = $conn->query("SELECT * FROM users 
              WHERE username='$username' AND password='$password'");

    if($result->num_rows > 0){
        $_SESSION['user'] = $username;
        header("Location: index.php");
    } else {
        echo "Invalid login";
    }
}
?>

<h2>Login</h2>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit" name="login">Login</button>
</form>