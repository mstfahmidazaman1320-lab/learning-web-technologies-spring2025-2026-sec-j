<?php
include 'session.php';

if ($_POST) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    
    if ($username == "" || $password == "") {
        echo "Fill all fields";
        exit;
    }

    
    foreach ($_SESSION['users'] as $user) {
        if ($user['username'] == $username) {
            echo "User already exists!";
            exit;
        }
    }

    
    $_SESSION['users'][] = [
        "username" => $username,
        "password" => $password
    ];

    echo "Registration successful! Now login.";
}
?>

<h2>Sign Up</h2>

<form method="POST">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button>Sign Up</button>
</form>

<br>
<a href="login.php"> Login</a>