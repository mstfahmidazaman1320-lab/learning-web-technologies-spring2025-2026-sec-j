<?php
include 'session.php';

$id = $_GET['id'];

foreach ($_SESSION['products'] as &$product) {
    if ($product['id'] == $id) {

        if ($_POST) {
            $product['name'] = $_POST['name'];
            $product['price'] = $_POST['price'];

            header("Location: view.php");
        }
?>

<form method="POST">
    Name: <input type="text" name="name" value="<?php echo $product['name']; ?>"><br>
    Price: <input type="text" name="price" value="<?php echo $product['price']; ?>"><br>
    <button>Update</button>
</form>

<?php
    }
}
?>