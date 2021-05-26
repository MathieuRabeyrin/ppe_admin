<?php
    require_once("./src/model/AdminDashboard.php");

    function dashboard()
    {
        $db = new AdminDashboard();
        $users = $db->getAllUsers();
        require_once("./src/view/dashboard.php");
    }

    function modifyForm($id)
    {
        $db = new AdminDashboard();
        $user = $db->getUser($id);
        if ($user == null)
            header("location: ./");
        require_once("./src/view/modify.php");
    }

    function addForm()
    {
        require_once("./src/view/add.php");
    }

    function delete($id)
    {
        $db = new AdminDashboard();
        $db->deleteUser($id);
        header("location: ./");
    }

    function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            require_once("./src/controller/FormController.php");

            $form = new FormController($_POST);
            if ($form->isValid()) {
                $form->submitForm();
                header("location: ./");
            } else
                header("location: ./?action=addForm");
        }
    }

    function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            require_once("./src/controller/FormController.php");

            $form = new FormController($_POST);
            if ($form->isValid()) {
                $form->updateForm($id);
                header("location: ./");
            } else
                header("location: ./?action=modifyForm&id=$id");
        }        
    }
?>