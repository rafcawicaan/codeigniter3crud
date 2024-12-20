<h1>Add Product</h1>
<form action="<?php echo site_url('products/store'); ?>" method="POST">
    <label>Name:</label>
    <input type="text" name="name" required><br>
    <label>Description:</label>
    <textarea name="description"></textarea><br>
    <label>Price:</label>
    <input type="number" name="price" step="0.01" required><br>
    <button type="submit">Save</button>
</form>
