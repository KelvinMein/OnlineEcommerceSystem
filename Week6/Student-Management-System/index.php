<!DOCTYPE html>
<html>
<head>
    <title>Student Portal Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="login-box">

    <h2>Student Portal Login</h2>

    <form action="login.php" method="POST">

        <input type="text" name="identifier" placeholder="Reg No or Name" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="login">Login</button>

    </form>

    <p style="margin-top:15px;">
        Don't have an account?
        <a href="register.php">Register here</a>
    </p>

</div>

</body>
</html>