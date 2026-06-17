<?php
include "../backend/class/User.php";
$user = new User();
// Check if the form was actually submitted via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($user->login($_POST['username'], $_POST['password'])) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
    
} else {
    header("Location: ../login.html");
    exit;
}
?>
<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$users = [
    [
        'username' => 'admin',
        'password' => 'admin123'
    ],
    [
        'username' => 'user1',
        'password' => 'user123'
    ],
    [
        'username' => 'user2',
        'password' => 'user223'
    ]
];

foreach ($users as $key => $user) {
    if ($user['username'] === $username && $user['password'] === $password) {
       $_SESSION['username'] = $username;
       header("location:profile.php");
        exit;
    }
}
echo "Invalid username or password.";
