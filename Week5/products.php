<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: customer_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Products</title>

<style>
body{
    font-family:Arial;
    margin:0;
    background:#f4f4f4;
}

.navbar{
    background:#2c3e50;
    color:white;
    padding:15px;
    text-align:center;
    font-size:22px;
}

.container{
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
    margin-top:20px;
}

.card{
    background:white;
    width:260px;
    margin:15px;
    border-radius:10px;
    overflow:hidden;
    box-shadow:0 2px 10px rgba(0,0,0,0.2);
    text-align:center;
    padding-bottom:15px;
}

.card img{
    width:100%;
    height:170px;
    object-fit:cover;
}

.card h3{
    margin:10px 0;
}

.card p{
    color:#555;
}

.btn{
    display:inline-block;
    padding:10px 15px;
    background:#3498db;
    color:white;
    text-decoration:none;
    border-radius:5px;
}

.btn:hover{
    background:#2980b9;
}

.topbar{
    background:#34495e;
    color:white;
    padding:10px;
    text-align:right;
}
</style>

</head>

<body>

<div class="topbar">
    Logged in as: <?php echo $_SESSION['user']; ?> |
    <a href="dashboard.php" style="color:yellow;">Dashboard</a> |
    <a href="logout.php" style="color:red;">Logout</a>
</div>

<div class="navbar">
    Electronics Products
</div>

<div class="container">

    <div class="card">
        <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=500">
        <h3>Smartphone</h3>
        <p>KES 25,000</p>
        <a class="btn" href="cart.php?product=Smartphone">Add to Cart</a>
    </div>

    <div class="card">
        <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=500">
        <h3>Laptop</h3>
        <p>KES 60,000</p>
        <a class="btn" href="cart.php?product=Laptop">Add to Cart</a>
    </div>

    <div class="card">
        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=500">
        <h3>Headphones</h3>
        <p>KES 3,500</p>
        <a class="btn" href="cart.php?product=Headphones">Add to Cart</a>
    </div>

    <div class="card">
        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=500">
        <h3>Smart Watch</h3>
        <p>KES 8,000</p>
        <a class="btn" href="cart.php?product=Smart Watch">Add to Cart</a>
    </div>

    <div class="card">
        <img src="https://images.unsplash.com/photo-1583863788434-e58a36330cf0?w=500">
        <h3>Bluetooth Speaker / Woofer</h3>
        <p>KES 12,000</p>
        <a class="btn" href="cart.php?product=Speaker">Add to Cart</a>
    </div>

</div>

</body>
</html>