<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Public Home</title>

    <style>
        body {
            font-family: Arial;
        }

        .container {
            width: 600px;
            margin: auto;
            border: 2px solid black;
        }

        .header {
            border-bottom: 2px solid black;
            padding: 10px;
        }

        .logo {
            float: left;
        }

        .menu {
            float: right;
        }

        .menu a {
            margin-left: 10px;
            text-decoration: none;
        }

        .content {
            height: 200px;
            padding: 20px;
            border-bottom: 2px solid black;
        }

        .footer {
            text-align: center;
            padding: 10px;
        }

        .clear {
            clear: both;
        }
    </style>

</head>

<body>

<div class="container">

    <!-- Header -->
    <div class="header">
        <div class="logo">
            <h2>XCompany</h2>
        </div>

        <div class="menu">
            <a href="index.php">Home</a> |
            <a href="login.php">Login</a> |
            <a href="register.php">Registration</a>
        </div>

        <div class="clear"></div>
    </div>

    <!-- Content -->
    <div class="content">
        <h3>Welcome to xCompany</h3>
    </div>

    <!-- Footer -->
    <div class="footer">
        Copyright © 2017
    </div>

</div>

</body>
</html>