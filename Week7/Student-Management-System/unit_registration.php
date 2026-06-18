<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: index.php");
    exit();
}

$units = [];
$message = "";

if(isset($_POST['register'])){
    $input = $_POST['units'];

    if(!empty($input)){
        $units = explode(",", $input);
        $message = "Units registered successfully.";
    } else {
        $message = "Please enter unit codes.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Unit Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
    <h2 class="logo">Student Portal</h2>

    <ul class="nav-links">
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="academic.php">Academic</a></li>
        <li><a href="notices.php">Notices</a></li>
        <li><a href="fees.php">Fees</a></li>
        <li><a href="timetable.php">Timetable</a></li>
        <li><a href="exams.php">Exams</a></li>
        <li><a href="unit_registration.php">Unit Registration</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>

<div class="container">

    <h1>Unit Registration</h1>

    <form method="POST">
        <input type="text" name="units" placeholder="Enter unit codes e.g CSC101, CSC102" required>
        <button type="submit" name="register">Register Units</button>
    </form>

    <p style="color:green;"><?php echo $message; ?></p>

    <?php if(!empty($units)): ?>
        <div class="dashboard-box">
            <h3>Registered Units</h3>
            <ul>
                <?php foreach($units as $u): ?>
                    <li><?php echo trim($u); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

</div>

</body>
</html>