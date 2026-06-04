<?php
session_start();

if(!isset($_SESSION['user']) && !isset($_SESSION['admin'])){
    header("Location: customer_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>

<style>
body{
    font-family:Arial;
    text-align:center;
    background:#f4f4f4;
}

.box{
    background:white;
    padding:40px;
    margin:100px auto;
    width:350px;
    border-radius:10px;
    box-shadow:0 2px 10px rgba(0,0,0,0.2);
}

a{
    display:block;
    margin:10px;
    padding:10px;
    background:#3498db;
    color:white;
    text-decoration:none;
    border-radius:5px;
}

a:hover{background:#2980b9;}
</style>
</head>

<body>

<div class="box">

<?php if(isset($_SESSION['admin'])): ?>
    <h2>Welcome Admin <?php echo $_SESSION['admin']; ?></h2>

    <a href="products.php">Manage Products</a>
    <a href="cart.php">View Cart</a>

<?php else: ?>
    <h2>Welcome Customer <?php echo $_SESSION['user']; ?></h2>

    <a href="products.php">Browse Products</a>
    <a href="cart.php">View Cart</a>

<?php endif; ?>

<a href="logout.php">Logout</a>

</div>

</body>
</html>