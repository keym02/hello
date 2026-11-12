<?php

class Room
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // READ all
    public function getAll()
    {
        return $this->conn->query(
            "SELECT * FROM rooms ORDER BY capacity, room_type"
        );
    }

    // READ one
    public function getById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM rooms WHERE id = ?");
		
        $stmt->bind_param("i", $id);
        $stmt->execute();

        return $stmt->get_result()->fetch_assoc();
    }

    // CREATE
    public function add($number, $type, $capacity, $status, $price)
    {
        $stmt = $this->conn->prepare(
            "INSERT INTO rooms (room_number, room_type, capacity, status, price_per_day)
             VALUES (?, ?, ?, ?, ?)"
        );

        $stmt->bind_param("ssssd", $number, $type, $capacity, $status, $price);

        return $stmt->execute();
    }

    // UPDATE
    public function update($id, $number, $type, $capacity, $status, $price)
    {
        $stmt = $this->conn->prepare(
            "UPDATE rooms
             SET room_number = ?, room_type = ?, capacity = ?, status = ?, price_per_day = ?
             WHERE id = ?"
        );

        $stmt->bind_param("ssssdi", $number, $type, $capacity, $status, $price, $id);

        return $stmt->execute();
    }

    // DELETE
    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM rooms WHERE id = ?");
        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }
}

?>