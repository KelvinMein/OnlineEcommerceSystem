<?php
include 'db.php';

$msg = "";

if(isset($_POST['register'])){

    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check = mysqli_query($conn, "SELECT * FROM employees WHERE email='$email'");

    if(mysqli_num_rows($check) > 0){
        $msg = "Email already exists";
    } else {
        mysqli_query($conn, "INSERT INTO employees(fullname,email,password)
        VALUES('$name','$email','$password')");

        $msg = "Registration successful";
    }
}
?>

<h2>Employee Registration</h2>

<p><?php echo $msg; ?></p>

<form method="POST">
    <input type="text" name="fullname" placeholder="Full Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button name="register">Register</button>
</form>

<a href="index.php">Login</a>