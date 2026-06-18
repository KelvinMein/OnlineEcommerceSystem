<?php
include 'db.php';

if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $conn->query("INSERT INTO students(fullname,email,course)
                  VALUES('$fullname','$email','$course')");

    header("Location: index.php");
}
?>

<form method="POST">
    <h2>Add Student</h2>

    <input type="text" name="fullname" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="course" placeholder="Course" required>

    <button type="submit" name="submit">Save</button>
</form>