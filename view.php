<?php
include 'session.php';
?>

<h2>Product List</h2>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Action</th>
    </tr>

    <?php foreach ($_SESSION['products'] as $product) { ?>
        <tr>
            <td><?php echo $product['id']; ?></td>
            <td><?php echo $product['name']; ?></td>
            <td><?php echo $product['price']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $product['id']; ?>">Edit</a> |
                <a href="delete.php?id=<?php echo $product['id']; ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>

</table>

<br>


<a href="dashboard.php">
    <button> Back to Dashboard</button>
</a>

<br><br>


<a href="add.php">
    <button>Add New Product</button>
</a>