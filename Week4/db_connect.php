<?php

$conn = mysqli_connect("localhost", "root", "", "ecommerce");

if($conn){
    echo "Database connected successfully";
} else {
    echo "Connection failed";
}

?>