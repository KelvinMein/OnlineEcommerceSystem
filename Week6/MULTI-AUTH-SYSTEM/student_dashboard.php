<?php
session_start();

if($_SESSION['role'] != "student"){
    header("Location: index.php");
    exit();
}
?>

<h1>Student Dashboard</h1>

<p>Welcome <?php echo $_SESSION['user']; ?></p>

<a href="logout.php">Logout</a>