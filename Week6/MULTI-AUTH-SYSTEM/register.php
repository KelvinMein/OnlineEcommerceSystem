<?php
include 'db.php';

$msg = "";

if(isset($_POST['register'])){

    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

    if(mysqli_num_rows($check) > 0){
        $msg = "Email already exists";
    } else {
        mysqli_query($conn, "INSERT INTO users(fullname,email,password,role)
        VALUES('$name','$email','$password','$role')");

        $msg = "Registration successful";
    }
}
?>

<h2>Register</h2>

<p><?php echo $msg; ?></p>

<form method="POST">

    <input type="text" name="fullname" placeholder="Full Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>

    <select name="role">
        <option value="student">Student</option>
        <option value="lecturer">Lecturer</option>
        <option value="admin">Administrator</option>
    </select><br><br>

    <button name="register">Register</button>

</form>