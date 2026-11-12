<!DOCTYPE html>
<html>
<head>
    <title>Hotel Rooms</title>
</head>
<body>

    <h2>Hotel Rooms</h2>

    <a href="index.php?action=add">Register Hotel Room</a>
    <br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Room No.</th>
            <th>Room Type</th>
            <th>Capacity</th>
            <th>Status</th>
            <th>Price/Day</th>
            <th>Action</th>
        </tr>

        <?php while ($row = $items->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo htmlspecialchars($row['room_number']); ?></td>
            <td><?php echo htmlspecialchars($row['room_type']); ?></td>
            <td><?php echo htmlspecialchars($row['capacity']); ?></td>
            <td><?php echo htmlspecialchars($row['status']); ?></td>
            <td><?php echo number_format($row['price_per_day'], 2); ?></td>
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