<?php session_start(); ?>

<?php
if (!$_SESSION['authenticated']) {
    echo "Access denied, please register";
    echo "<a href='register.php'><button>Register here</button></a>";
    exit;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Profile</h1>
    <p><?=  $_SESSION['name']; ?>, Welcome to our app</p>
    <p>Your email is <?= $_SESSION['email'] ?></p>
   <a href="logout.php"> <button>Logout</button></a>
</body>
</html>