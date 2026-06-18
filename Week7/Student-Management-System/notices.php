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
    <title>Notices</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Lecturer Notices</h1>

    <div class="dashboard-box">
        <p>Assignment deadline extended to Friday</p>
        <p>CAT exam next week</p>
    </div>

</div>

</body>
</html>