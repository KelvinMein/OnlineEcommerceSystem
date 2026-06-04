<?php
session_start();
include "db.php";

if(!isset($_SESSION['user'])){
    header("Location: customer_login.php");
    exit();
}

$username = $_SESSION['user'];

if(isset($_GET['product'])){
    $product = $_GET['product'];
    mysqli_query($conn, "INSERT INTO cart(username, product) VALUES('$username', '$product')");
    echo "Added to Cart<br><br>";
}

if(isset($_GET['remove'])){
    $id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM cart WHERE id=$id");
    header("Location: cart.php");
    exit();
}

$result = mysqli_query($conn, "SELECT * FROM cart WHERE username='$username'");
?>

<h2>Your Cart</h2>

<?php
while($row = mysqli_fetch_assoc($result)){
    echo $row['product'] . " <a href='cart.php?remove=".$row['id']."'>Remove</a><br>";
}
?>

<br>
<a href="products.php">Continue Shopping</a>