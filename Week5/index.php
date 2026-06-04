<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>E-Commerce System</title>

<style>
body{
    margin:0;
    font-family:Arial;
    background:#f4f4f4;
}

.navbar{
    background:#2c3e50;
    padding:15px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    color:white;
}

.logo{
    font-size:22px;
    font-weight:bold;
}

.nav-links a{
    color:white;
    text-decoration:none;
    margin:0 10px;
    font-weight:bold;
}

.nav-links a:hover{
    color:gold;
}

.hero{
    text-align:center;
    background:white;
    padding:60px 20px;
}

.hero h1{
    color:#2c3e50;
    font-size:40px;
}

.hero p{
    color:#666;
    font-size:18px;
    margin-top:10px;
}

.btn{
    display:inline-block;
    margin:10px;
    padding:12px 20px;
    background:#3498db;
    color:white;
    text-decoration:none;
    border-radius:5px;
}

.btn:hover{
    background:#2980b9;
}

.section{
    text-align:center;
    padding:30px;
}

footer{
    background:#2c3e50;
    color:white;
    text-align:center;
    padding:15px;
    margin-top:20px;
}
</style>

</head>

<body>

<div class="navbar">
    <div class="logo">E-Commerce System</div>

    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="register.php">Register</a>
        <a href="customer_login.php">Customer Login</a>
        <a href="admin_login.php">Admin Login</a>
        <a href="products.php">Products</a>
    </div>
</div>

<div class="hero">

    <h1>Welcome to Our Electronics Store</h1>

    <p>Buy phones, laptops, headphones and more easily online.</p>

    <a class="btn" href="register.php">Register</a>
    <a class="btn" href="customer_login.php">Login</a>
    <a class="btn" href="products.php">Start Shopping</a>

</div>

<div class="section">
    <h2>Simple Online Shopping System</h2>
    <p>Login as customer or admin to continue your shopping experience.</p>
</div>

<footer>
    &copy; 2026 E-Commerce System
</footer>

</body>
</html>