<?php

require_once "models/MenuItem.php";

class MenuController
{
    private $menu;

    public function __construct($db)
    {
        $this->menu = new MenuItem($db);
    }

    // Show list
    public function index()
    {
        $items = $this->menu->getAll();

        include "views/menu_list.php";
    }

    // Show add form / save
    public function add()
    {
        if (isset($_POST['save'])) {

            $this->menu->add(
                $_POST['item_code'],
                $_POST['item_name'],
                $_POST['category'],
                $_POST['status'],
                $_POST['price']
            );

            header("Location: index.php");
            exit;
        }

        include "views/menu_add.php";
    }

    // Show edit form / update
    public function edit()
    {
        $id = (int) $_GET['id'];

        $item = $this->menu->getById($id);

        if (isset($_POST['update'])) {

            $this->menu->update(
                $id,
                $_POST['item_code'],
                $_POST['item_name'],
                $_POST['category'],
                $_POST['status'],
                $_POST['price']
            );

            header("Location: index.php");
            exit;
        }

        include "views/menu_edit.php";
    }

    // Delete
    public function delete()
    {
        $id = (int) $_GET['id'];

        $this->menu->delete($id);

        header("Location: index.php");
        exit;
    }
}

?>