<?php
include 'session.php';

$id = $_GET['id'];

foreach ($_SESSION['products'] as $key => $product) {
    if ($product['id'] == $id) {
        unset($_SESSION['products'][$key]);
    }
}

header("Location: view.php");
?>