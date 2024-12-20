<h1>Edit Product</h1>
<form action="<?php echo site_url('products/update/'.$product['id']); ?>" method="POST">
    <label>Name:</label>
    <input type="text" name="name" value="<?php echo $product['name']; ?>" required><br>
    <label>Description:</label>
    <textarea name="description"><?php echo $product['description']; ?></textarea><br>
    <label>Price:</label>
    <input type="number" name="price" value="<?php echo $product['price']; ?>" step="0.01" required><br>
    <button type="submit">Update</button>
</form>
