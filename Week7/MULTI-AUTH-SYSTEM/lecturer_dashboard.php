<?php
session_start();

if($_SESSION['role'] != "lecturer"){
    header("Location: index.php");
    exit();
}
?>

<h1>Lecturer Dashboard</h1>

<p>Welcome <?php echo $_SESSION['user']; ?></p>

<a href="logout.php">Logout</a>