<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
    <a href="index.php">Home</a>
    <a href="add.php">Add Student</a>
</div>

<h1>Student Management System Dashboard</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Course</th>
        <th>Actions</th>
    </tr>

<?php
$result = $conn->query("SELECT * FROM students");

while($row = $result->fetch_assoc()){
?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['fullname']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['course']; ?></td>
    <td>
        <a href="edit.php?id=<?php echo $row['id']; ?>" class="edit">Edit</a>
        <a href="delete.php?id=<?php echo $row['id']; ?>" class="delete"
           onclick="return confirm('Are you sure you want to delete this student?')">
           Delete
        </a>
    </td>
</tr>

<?php } ?>

</table>

</body>
</html>