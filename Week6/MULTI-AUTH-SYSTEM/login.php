<?php
session_start();
include 'db.php';

$msg = "";

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    $user = mysqli_fetch_assoc($result);

    if($user && password_verify($password, $user['password'])){

        $_SESSION['user'] = $user['fullname'];
        $_SESSION['role'] = $user['role'];

        if($user['role'] == "student"){
            header("Location: student_dashboard.php");
        }
        elseif($user['role'] == "lecturer"){
            header("Location: lecturer_dashboard.php");
        }
        else{
            header("Location: admin_dashboard.php");
        }

        exit();

    } else {
        $msg = "Invalid login details";
    }
}
?>

<h2>Login</h2>

<p style="color:red;"><?php echo $msg; ?></p>

<form method="POST">

    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>

    <button name="login">Login</button>

</form>