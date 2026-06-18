<?php
session_start();
include 'db.php';

$msg = "";

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM employees WHERE email='$email'");
    $user = mysqli_fetch_assoc($result);

    if($user && password_verify($password, $user['password'])){
        $_SESSION['user'] = $user['fullname'];
        header("Location: dashboard.php");
    } else {
        $msg = "Invalid login details";
    }
}
?>

<h2>Employee Login</h2>

<p><?php echo $msg; ?></p>

<form method="POST">
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button name="login">Login</button>
</form>

<a href="register.php">Register</a>