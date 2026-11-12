<?php

require_once "models/Room.php";

class RoomController
{
    private $room;

    public function __construct($db)
    {
        $this->room = new Room($db);
    }

    // Show list
    public function index()
    {
        $items = $this->room->getAll();

        include "views/room_list.php";
    }

    // Show add form / save
    public function add()
    {
        if (isset($_POST['save'])) {

            $this->room->add(
                $_POST['room_number'],
                $_POST['room_type'],
                $_POST['capacity'],
                $_POST['status'],
                $_POST['price_per_day']
            );

            header("Location: index.php");
            exit;
        }

        include "views/room_add.php";
    }

    // Show edit form / update
    public function edit()
    {
        $id = (int) $_GET['id'];

        $item = $this->room->getById($id);

        if (isset($_POST['update'])) {

            $this->room->update(
                $id,
                $_POST['room_number'],
                $_POST['room_type'],
                $_POST['capacity'],
                $_POST['status'],
                $_POST['price_per_day']
            );

            header("Location: index.php");
            exit;
        }

        include "views/room_edit.php";
    }

    // Delete
    public function delete()
    {
        $id = (int) $_GET['id'];

        $this->room->delete($id);

        header("Location: index.php");
        exit;
    }
}

?>