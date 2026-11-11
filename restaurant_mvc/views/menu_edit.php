<!DOCTYPE html>
<html>
<head>
    <title>Edit Menu Item</title>
</head>
<body>

    <h2>Edit Menu Item</h2>

    <form method="POST">

        Item Code:
        <input type="text" name="item_code"
        value="<?php echo htmlspecialchars($item['item_code']); ?>" required>
        <br><br>

        Item Name:
        <input type="text" name="item_name"
        value="<?php echo htmlspecialchars($item['item_name']); ?>" required>
        <br><br>

        Category:
        <select name="category" required>
            <option value="Appetizer" <?php if ($item['category'] == "Appetizer") echo "selected"; ?>>Appetizer</option>
            <option value="Main Course" <?php if ($item['category'] == "Main Course") echo "selected"; ?>>Main Course</option>
            <option value="Dessert" <?php if ($item['category'] == "Dessert") echo "selected"; ?>>Dessert</option>
            <option value="Drinks" <?php if ($item['category'] == "Drinks") echo "selected"; ?>>Drinks</option>
        </select>
        <br><br>

        Status:
        <select name="status" required>
            <option value="Available" <?php if ($item['status'] == "Available") echo "selected"; ?>>Available</option>
            <option value="Sold Out" <?php if ($item['status'] == "Sold Out") echo "selected"; ?>>Sold Out</option>
        </select>
        <br><br>

        Price:
        <input type="number" name="price" step="0.01" min="0"
        value="<?php echo htmlspecialchars($item['price']); ?>" required>
        <br><br>

        <button type="submit" name="update">Update</button>

    </form>

    <br>
    <a href="index.php">Back</a>

</body>
</html>