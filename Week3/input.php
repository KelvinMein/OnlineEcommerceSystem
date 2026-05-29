<?php

if(isset($_POST['username'])) {

    $name = $_POST['username'];

    echo "Hello " . $name;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Input</title>
</head>

<body>

<h2>Dynamic User Input Handling</h2>

<form method="POST">

    <input type="text" name="username" placeholder="Enter your name">

    <br><br>

    <input type="submit" value="Submit">

</form>

</body>
</html>