<!DOCTYPE html>
<html>
<head>
    <title>Add Menu Item</title>
</head>
<body>

    <h2>Add Menu Item</h2>

    <form method="POST">

        Item Code:
        <input type="text" name="item_code" required>
        <br><br>

        Item Name:
        <input type="text" name="item_name" required>
        <br><br>

        Category:
        <select name="category" required>
            <option value="">Select Category</option>
            <option value="Appetizer">Appetizer</option>
            <option value="Main Course">Main Course</option>
            <option value="Dessert">Dessert</option>
            <option value="Drinks">Drinks</option>
        </select>
        <br><br>

        Status:
        <select name="status" required>
            <option value="Available">Available</option>
            <option value="Sold Out">Sold Out</option>
        </select>
        <br><br>

        Price:
        <input type="number" name="price" step="0.01" min="0" required>
        <br><br>

        <button type="submit" name="save">Save</button>

    </form>

    <br>
    <a href="index.php">Back</a>

</body>
</html>