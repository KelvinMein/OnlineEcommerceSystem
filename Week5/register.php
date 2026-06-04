<?php
include "db.php";

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");

    if(mysqli_num_rows($check) > 0){
        echo "Username already exists";
    } else {
        mysqli_query($conn, "INSERT INTO users(username,password) VALUES('$username','$password')");
        echo "Registration successful";
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit" name="register">Register</button>
</form>