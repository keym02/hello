<?php

require_once "config/database.php";
require_once "controllers/MenuController.php";

$controller = new MenuController($conn);

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if ($action == 'add') {
    $controller->add();
} elseif ($action == 'edit') {
    $controller->edit();
} elseif ($action == 'delete') {
    $controller->delete();
} else {
    $controller->index();
}

?>