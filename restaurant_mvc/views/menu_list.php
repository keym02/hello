<!DOCTYPE html>
<html>
<head>
    <title>Restaurant Menu</title>
</head>
<body>

    <h2>Restaurant Menu</h2>

    <a href="index.php?action=add">Add Menu Item</a>
    <br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Item Code</th>
            <th>Item Name</th>
            <th>Category</th>
            <th>Status</th>
            <th>Price</th>
            <th>Action</th>
        </tr>

        <?php while ($row = $items->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo htmlspecialchars($row['item_code']); ?></td>
            <td><?php echo htmlspecialchars($row['item_name']); ?></td>
            <td><?php echo htmlspecialchars($row['category']); ?></td>
            <td><?php echo htmlspecialchars($row['status']); ?></td>
            <td><?php echo number_format($row['price'], 2); ?></td>
            <td>
                <a href="index.php?action=edit&id=<?php echo $row['id']; ?>">Edit</a>
                |
                <a href="index.php?action=delete&id=<?php echo $row['id']; ?>"
                   onclick="return confirm('Delete this item?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>