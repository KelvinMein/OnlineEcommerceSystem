<?php
include 'db.php';

if(isset($_POST['submit'])){
    $book_id = $_POST['book_id'];
    $book_title = $_POST['book_title'];
    $author = $_POST['author'];
    $category = $_POST['category'];

    $conn->query("INSERT INTO books(book_id,book_title,author,category)
    VALUES('$book_id','$book_title','$author','$category')");

    header("Location: index.php");
}
?>

<h2>Add Book</h2>

<form method="POST">
    Book ID: <input type="text" name="book_id"><br><br>
    Title: <input type="text" name="book_title"><br><br>
    Author: <input type="text" name="author"><br><br>
    Category: <input type="text" name="category"><br><br>

    <button type="submit" name="submit">Save</button>
</form>