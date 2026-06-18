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
    <title>Timetable</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Semester Timetable</h1>

    <div class="dashboard-box">
        <p>Monday: CSC101 - 8:00 AM</p>
        <p>Tuesday: CSC102 - 10:00 AM</p>
        <p>Wednesday: DBMS - 2:00 PM</p>
    </div>

</div>

</body>
</html>