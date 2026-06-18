<?php
include 'db.php';

if(isset($_POST['save'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $phone = $_POST['phone'];

    $conn->query("INSERT INTO employees(fullname,email,department,phone)
    VALUES('$fullname','$email','$department','$phone')");

    header("Location:index.php");
}
?>

<h2>Add Employee</h2>

<form method="POST">
    <input type="text" name="fullname" placeholder="Full Name" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="text" name="department" placeholder="Department" required><br><br>
    <input type="text" name="phone" placeholder="Phone" required><br><br>

    <button type="submit" name="save">Save</button>
</form>