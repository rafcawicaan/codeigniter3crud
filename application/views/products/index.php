<h1>Product List</h1>
<a href="<?php echo site_url('products/create'); ?>">Add Product</a>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($products as $product): ?>
    <tr>
        <td><?php echo $product['name']; ?></td>
        <td><?php echo $product['description']; ?></td>
        <td><?php echo $product['price']; ?></td>
        <td>
            <a href="<?php echo site_url('products/edit/'.$product['id']); ?>">Edit</a>
            <a href="<?php echo site_url('products/delete/'.$product['id']); ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
