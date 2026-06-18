<?php
include 'db.php';

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM books WHERE id=$id");
$row = $result->fetch_assoc();

if(isset($_POST['update'])){
    $book_id = $_POST['book_id'];
    $book_title = $_POST['book_title'];
    $author = $_POST['author'];
    $category = $_POST['category'];

    $conn->query("UPDATE books SET
        book_id='$book_id',
        book_title='$book_title',
        author='$author',
        category='$category'
        WHERE id=$id");

    header("Location: index.php");
}
?>

<h2>Edit Book</h2>

<form method="POST">
    Book ID: <input type="text" name="book_id" value="<?= $row['book_id']; ?>"><br><br>
    Title: <input type="text" name="book_title" value="<?= $row['book_title']; ?>"><br><br>
    Author: <input type="text" name="author" value="<?= $row['author']; ?>"><br><br>
    Category: <input type="text" name="category" value="<?= $row['category']; ?>"><br><br>

    <button type="submit" name="update">Update</button>
</form>