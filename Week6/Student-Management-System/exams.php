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
    <title>Exams</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Exam Results</h1>

    <div class="dashboard-box">
        <p>CSC101 CAT: 78%</p>
        <p>CSC102 CAT: 65%</p>
        <p>Final Exam: Pending</p>
    </div>

</div>

</body>
</html>