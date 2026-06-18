<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">

    <h2 class="logo">🎓 Student Portal</h2>

    <ul class="nav-links">
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="academic.php">Academic</a></li>
        <li><a href="notices.php">Notices</a></li>
        <li><a href="fees.php">Fees</a></li>
        <li><a href="timetable.php">Timetable</a></li>
        <li><a href="exams.php">Exams</a></li>
        <li><a href="unit-registration.php">Unit Registration</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>

</div>

<div class="container">

    <h1>Welcome, <?php echo $_SESSION['user']; ?></h1>

    <div class="dashboard-box">

        <h3>Student Portal Dashboard</h3>

        <p>Select a module from the navigation menu above to continue.</p>

        <div style="margin-top:20px;">
            <a href="academic.php" class="btn">Academic</a>
            <a href="notices.php" class="btn">Notices</a>
            <a href="fees.php" class="btn">Fees</a>
            <a href="timetable.php" class="btn">Timetable</a>
            <a href="exams.php" class="btn">Exams</a>
            <a href="unit-registration.php" class="btn">Unit Registration</a>
        </div>

    </div>

</div>

</body>
</html>