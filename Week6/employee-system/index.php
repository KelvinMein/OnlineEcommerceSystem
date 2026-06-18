<?php
session_start();
include 'db.php';

if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
?>

<h2>Employee Dashboard</h2>

<a href="add.php">Add Employee</a> | 
<a href="logout.php">Logout</a>

<br><br>

<form method="GET">
    <input type="text" name="search" placeholder="Search employee">
    <button type="submit">Search</button>
</form>

<br>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Department</th>
    <th>Phone</th>
    <th>Actions</th>
</tr>

<?php
$search = $_GET['search'] ?? '';

$query = "SELECT * FROM employees 
          WHERE fullname LIKE '%$search%' 
          OR department LIKE '%$search%'";

$result = $conn->query($query);

while($row = $result->fetch_assoc()){
?>

<tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['fullname']; ?></td>
    <td><?= $row['email']; ?></td>
    <td><?= $row['department']; ?></td>
    <td><?= $row['phone']; ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id']; ?>">Edit</a>
        <a href="delete.php?id=<?= $row['id']; ?>"
           onclick="return confirm('Delete employee?')">Delete</a>
    </td>
</tr>

<?php } ?>

</table>