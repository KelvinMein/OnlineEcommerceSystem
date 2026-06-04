<?php
include "db.php";

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username'");

    if(mysqli_num_rows($check) > 0){
        echo "Admin already exists";
    } else {
        mysqli_query($conn, "INSERT INTO admin(username,password) VALUES('$username','$password')");
        echo "Admin registered successfully";
    }
}
?>

<h2>Admin Register</h2>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit" name="register">Register</button>
</form>

<a href="admin_login.php">Go to Login</a>