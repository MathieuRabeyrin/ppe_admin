<?php
    require_once "./src/controller/frontController.php";
    $path = isset($_GET['action']) ? $_GET['action'] : "";

    if (isset($_GET['id']))
        $id = $_GET['id'];

    switch ($path) {
        case 'addForm':
            addForm();
            break;
        case 'modifyForm':
            modifyForm($id);
            break;
        case 'delete':
            delete($id);
            break;
        case 'add':
            add();
            break;
        case 'update':
            update($id);
            break;
        default:
            dashboard();
            break;
    }
?>