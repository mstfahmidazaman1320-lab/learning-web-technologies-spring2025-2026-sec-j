<?php
include 'session.php';

if ($_POST) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    
    if (empty($_SESSION['users'])) {
        echo "<h3 style='color:red;'>Please sign up first!</h3>";
        echo "<a href='signup.php'><button>⬅ Back to Sign Up</button></a>";
        exit;
    }

    $found = false;

    foreach ($_SESSION['users'] as $user) {
        if ($user['username'] == $username && $user['password'] == $password) {
            $_SESSION['user'] = $username;
            $found = true;
            header("Location: dashboard.php");
            exit;
        }
    }

    if (!$found) {
        echo "<h3 style='color:red;'>Invalid login!</h3>";
        echo "<a href='login.php'><button>Retry Login</button></a>";
        exit;
    }
}
?>

<h2>Login</h2>

<form method="POST">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <button>Login</button>
</form>

<br>


<a href="signup.php"><button> Sign Up</button></a>