<?php
session_start();
include 'db.php';

$message = "";

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

    if(mysqli_num_rows($result) > 0){

        $user = mysqli_fetch_assoc($result);

        if(password_verify($password, $user['password'])){

            $_SESSION['user'] = $user['fullname'];
            $_SESSION['role'] = $user['role'];

            if($user['role'] == 'student'){
                header("Location: student_dashboard.php");
            }
            elseif($user['role'] == 'lecturer'){
                header("Location: lecturer_dashboard.php");
            }
            else{
                header("Location: admin_dashboard.php");
            }

            exit();

        } else {
            $message = "Incorrect password.";
        }

    } else {
        $message = "User not found.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Multi-User Authentication System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-box">

    <h2>Multi-User Login</h2>

    <p style="color:red;"><?php echo $message; ?></p>

    <form method="POST">

        <input type="email" name="email" placeholder="Email Address" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="login">Login</button>

    </form>

    <p>
        Don't have an account?
        <a href="register.php">Register Here</a>
    </p>

</div>

</body>
</html>