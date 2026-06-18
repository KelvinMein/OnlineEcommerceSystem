<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Library System</title>
</head>
<body>

<h2>Library Book List</h2>

<a href="add.php">Add Book</a>
<br><br>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Book ID</th>
    <th>Title</th>
    <th>Author</th>
    <th>Category</th>
    <th>Actions</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM books");

while($row = $result->fetch_assoc()){
?>

<tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['book_id']; ?></td>
    <td><?= $row['book_title']; ?></td>
    <td><?= $row['author']; ?></td>
    <td><?= $row['category']; ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id']; ?>">Edit</a>
        <a href="delete.php?id=<?= $row['id']; ?>"
           onclick="return confirm('Delete this book?')">Delete</a>
    </td>
</tr>

<?php } ?>

</table>

</body>
</html>