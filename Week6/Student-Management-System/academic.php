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
    <title>Academic</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Academic Progress</h1>

    <p><strong>Student:</strong> <?php echo $_SESSION['user']; ?></p>
    <p><strong>Year:</strong> Year 2</p>
    <p><strong>Semester:</strong> Semester 1</p>

    <div class="dashboard-box">
        <p>Progress: 65% Completed</p>
        <p>Status: Active Student</p>
    </div>

</div>

</body>
</html>