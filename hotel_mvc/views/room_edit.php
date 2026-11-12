<!DOCTYPE html>
<html>
<head>
    <title>Edit Hotel Room</title>
</head>
<body>

    <h2>Edit Hotel Room</h2>

    <form method="POST">

        Room No.:
        <input type="text" name="room_number"
        value="<?php echo htmlspecialchars($item['room_number']); ?>" required>
        <br><br>

        Room Type:
        <input type="text" name="room_type"
        value="<?php echo htmlspecialchars($item['room_type']); ?>" required>
        <br><br>

        Capacity:
        <select name="capacity" required>
            <option value="1" <?php if ($item['capacity'] == "1") echo "selected"; ?>>1</option>
            <option value="2" <?php if ($item['capacity'] == "2") echo "selected"; ?>>2</option>
            <option value="3" <?php if ($item['capacity'] == "3") echo "selected"; ?>>3</option>
            <option value="5" <?php if ($item['capacity'] == "5") echo "selected"; ?>>5</option>
        </select>
        <br><br>

        Status:
        <select name="status" required>
            <option value="Available" <?php if ($item['status'] == "Available") echo "selected"; ?>>Available</option>
            <option value="Occupied" <?php if ($item['status'] == "Occupied") echo "selected"; ?>>Occupied</option>
			<option value="Maintenance" <?php if ($item['status'] == "Maintenance") echo "selected"; ?>>Maintenance</option>
        </select>
        <br><br>

        Price/Day:
        <input type="number" name="price_per_day" step="0.01" min="0"
        value="<?php echo htmlspecialchars($item['price_per_day']); ?>" required>
        <br><br>

        <button type="submit" name="update">Update</button>

    </form>

    <br>
    <a href="index.php">Back</a>

</body>
</html>