<!DOCTYPE html>
<html>
<head>
    <title>Add Hotel Room</title>
</head>
<body>

    <h2>Register Hotel Room</h2>

    <form method="POST">

        Room No.:
        <input type="text" name="room_number" required>
        <br><br>

        Room Type:
        <input type="text" name="room_type" required>
        <br><br>

        Capacity:
        <select name="capacity" required>
            <option value="">Select Capacity</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="5">5</option>
        </select>
        <br><br>

        Status:
        <select name="status" required>
            <option value="Available">Available</option>
            <option value="Occupied">Occupied</option>
			<option value="Maintenance">Maintenance</option>
        </select>
        <br><br>

        Price/Day:
        <input type="number" name="price_per_day" step="0.01" min="0" required>
        <br><br>

        <button type="submit" name="save">Save</button>

    </form>

    <br>
    <a href="index.php">Back</a>

</body>
</html>