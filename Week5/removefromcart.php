<?php
include '../db.php';

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM cart WHERE id='$id'");

echo "Removed from Cart";
?>