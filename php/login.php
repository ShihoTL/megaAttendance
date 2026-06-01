<?php
include 'students_data.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$isAuthenticated = false;

foreach ($datas as $student) {
    if ($student['username'] === $user && $student['password'] === $pass) {
    echo "Login successful! Welcome, " . $student['name'] . ". <a href='students_list.php'>Go to dashboard</a>";
        exit;
    }
}

    echo "Invalid username or password. <a href='login.php'>Try again</a>";
?>