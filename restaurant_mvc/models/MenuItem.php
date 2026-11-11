<?php

class MenuItem
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
            "SELECT * FROM menu_items ORDER BY category, item_name"
        );
    }

    // READ one
    public function getById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM menu_items WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        return $stmt->get_result()->fetch_assoc();
    }

    // CREATE
    public function add($code, $name, $category, $status, $price)
    {
        $stmt = $this->conn->prepare(
            "INSERT INTO menu_items (item_code, item_name, category, status, price)
             VALUES (?, ?, ?, ?, ?)"
        );

        $stmt->bind_param("ssssd", $code, $name, $category, $status, $price);

        return $stmt->execute();
    }

    // UPDATE
    public function update($id, $code, $name, $category, $status, $price)
    {
        $stmt = $this->conn->prepare(
            "UPDATE menu_items
             SET item_code = ?, item_name = ?, category = ?, status = ?, price = ?
             WHERE id = ?"
        );

        $stmt->bind_param("ssssdi", $code, $name, $category, $status, $price, $id);

        return $stmt->execute();
    }

    // DELETE
    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM menu_items WHERE id = ?");
        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }
}

?>