<?php
include 'config.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $gender = $_POST['gender'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    if($password == $cpassword){
        $_SESSION['users'][$username] = [
            "name"=>$name,
            "email"=>$email,
            "password"=>$password,
            "gender"=>$gender,
            "dob"=>$day."-".$month."-".$year,
            "picture"=>""
        ];
        echo "Registration Successful!";
    } else {
        echo "Password not matched!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Registration</title>

<style>
body{
    font-family: Arial;
}

.container{
    width: 700px;
    margin: auto;
    border: 2px solid black;
}

/* Header */
.header{
    border-bottom: 2px solid black;
    padding: 10px;
}

.menu{
    float: right;
}

.clear{
    clear: both;
}

/* Content */
.content{
    padding: 20px;
    border-bottom: 2px solid black;
}

/* Footer */
.footer{
    text-align: center;
    padding: 10px;
}

/* Form */
fieldset{
    border: 1px solid black;
}

table{
    width: 100%;
}

td{
    padding: 6px;
}

/* Input styling */
input[type="text"],
input[type="password"],
input[type="email"]{
    width: 100%;
}

/* DOB fix (IMPORTANT) */
.dob input{
    width: 50px;
    display: inline;
}

</style>
</head>

<body>

<div class="container">

<!-- Header -->
<div class="header">
    <b>XCompany</b>

    <div class="menu">
        <a href="index.php">Home</a> |
        <a href="login.php">Login</a> |
        <a href="registration.php">Registration</a>
    </div>
    <div class="clear"></div>
</div>

<!-- Content -->
<div class="content">

<form method="post">

<fieldset>
<legend><b>REGISTRATION</b></legend>

<table>

<tr>
<td>Name</td>
<td><input type="text" name="name"></td>
</tr>

<tr>
<td>Email</td>
<td><input type="email" name="email"></td>
</tr>

<tr>
<td>Username</td>
<td><input type="text" name="username"></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" name="password"></td>
</tr>

<tr>
<td>Confirm Password</td>
<td><input type="password" name="cpassword"></td>
</tr>

<tr>
<td>Gender</td>
<td>
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female
<input type="radio" name="gender" value="Other"> Other
</td>
</tr>

<tr>
<td>Date of Birth</td>
<td class="dob">
<input type="text" name="day"> /
<input type="text" name="month"> /
<input type="text" name="year">
<span>(dd/mm/yyyy)</span>
</td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>

</table>

</fieldset>

</form>

</div>

<!-- Footer -->
<div class="footer">
Copyright © 2017
</div>

</div>

</body>
</html>