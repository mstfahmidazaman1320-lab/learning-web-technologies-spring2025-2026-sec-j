<?php
include 'session.php';

if ($_POST) {
    $name = $_POST['name'];
    $price = $_POST['price'];

    $product = [
        "id" => time(),
        "name" => $name,
        "price" => $price
    ];

    $_SESSION['products'][] = $product;

    echo "<h3 style='color:green;'>Product Added!</h3>";
}
?>

<h2>Add Product</h2>

<form method="POST">
    Name: <input type="text" name="name" required><br><br>
    Price: <input type="text" name="price" required><br><br>
    <button type="submit">Add</button>
</form>

<br>


<a href="dashboard.php">
    <button>Back to Dashboard</button>
</a>

<br><br>

<a href="view.php">
    <button>View Products</button>
</a>