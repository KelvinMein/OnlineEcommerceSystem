<?php
include 'db.php';

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();

if(isset($_POST['update'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $conn->query("UPDATE students SET
        fullname='$fullname',
        email='$email',
        course='$course'
        WHERE id=$id");

    header("Location: index.php");
}
?>

<form method="POST">
    <h2>Edit Student</h2>

    <input type="text" name="fullname"
           value="<?= $row['fullname']; ?>" required>

    <input type="email" name="email"
           value="<?= $row['email']; ?>" required>

    <input type="text" name="course"
           value="<?= $row['course']; ?>" required>

    <button type="submit" name="update">Update</button>
</form>