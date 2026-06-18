<?php
include 'db.php';

$id = $_GET['id'];
$row = $conn->query("SELECT * FROM employees WHERE id=$id")->fetch_assoc();

if(isset($_POST['update'])){
    $conn->query("UPDATE employees SET
        fullname='{$_POST['fullname']}',
        email='{$_POST['email']}',
        department='{$_POST['department']}',
        phone='{$_POST['phone']}'
        WHERE id=$id");

    header("Location:index.php");
}
?>

<h2>Edit Employee</h2>

<form method="POST">
    <input type="text" name="fullname" value="<?= $row['fullname']; ?>" required><br><br>
    <input type="email" name="email" value="<?= $row['email']; ?>" required><br><br>
    <input type="text" name="department" value="<?= $row['department']; ?>" required><br><br>
    <input type="text" name="phone" value="<?= $row['phone']; ?>" required><br><br>

    <button type="submit" name="update">Update</button>
</form>